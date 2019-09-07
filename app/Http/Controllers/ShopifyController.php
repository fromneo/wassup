<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OhMyBrew\ShopifyApp\Models\Shop;
use OhMyBrew\ShopifyApp\Facades\ShopifyApp;
use \App\Models\Setting;
use DateTime;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use OhMyBrew\ShopifyApp\Models\Charge;
use OhMyBrew\ShopifyApp\Models\Plan;
use OhMyBrew\ShopifyApp\Services\BillingPlan;

class ShopifyController extends Controller
{
    public function index()
    {
    	$shop = ShopifyApp::shop();
    	$setting = Setting::where('shop_id', $shop->id)->first();
    	 $mailchimp_data = \App\Models\Mailchimp_data::where('shop_id', $shop->id)->get();
        
        // $discount_codes = $shop->api()->request(
        //                         'GET',
        //                         '/admin/api/2019-04/price_rules/417856815173/discount_codes.json',
        //                         []
        //                     )->body->discount_codes;
        $icons_data = \App\Models\Icon::where('plan_id', 1)->where('plan_id', 1)->limit(4)->inRandomOrder()->get();
    	if ($setting) {
    		return view('shopify.dashboard')->with(['shop' => $shop, 'setting' => $setting, 'mailchimp_data' =>$mailchimp_data]);
    	}
    	return view('shopify.welcome')->with(['shop' => $shop, 'icons' => $icons_data]);
    }
    public function discount()
    {
        $shop = ShopifyApp::shop();
        $discount_codes=[];
        $price_rules = $shop->api()->request(
            'GET',
            '/admin/price_rules.json',
            []
        )->body->price_rules;
        foreach ($price_rules as $price_rule) {
            $datetime = new DateTime();
            $date=$datetime->format("Y-m-d");
            $time=$datetime->format("H:i:s");
            $display=$date.' '.$time;
            if($price_rule->ends_at){
               if(strtotime($display) < strtotime($price_rule->ends_at))
                {
                   $discount_code = $shop->api()->request(
                        'GET',
                        '/admin/price_rules/'.$price_rule->id.'/discount_codes.json',
                        []
                    )->body->discount_codes; 
                    foreach ($discount_code as $discount) {
                        $discount_codes[] = $discount;
                    }
                }   
            }else{
                $discount_code = $shop->api()->request(
                    'GET',
                    '/admin/price_rules/'.$price_rule->id.'/discount_codes.json',
                    []
                )->body->discount_codes; 
                foreach ($discount_code as $discount) {
                    $discount_codes[] = $discount;
                }
            }
        }
        return response()->json($discount_codes);
    }
    public function ambassador(){
        $shop = ShopifyApp::shop();
        $charge = $shop->planCharge();
        if($charge){
            $active_charges = $charge->retrieve();
            $active_charge =$active_charges->name;
            $active_charge_status = $active_charges->status;
         }else{
             $active_charge =  'BEGINNERS';
             $active_charge_status = 'active';
         } 
        //$active_charge = $charge->retrieve();
        $setting = Setting::where('shop_id', $shop->id)->first();
        $icons_data = \App\Models\Icon::all();
        $categories = \App\Models\Category::with('childrenList')->whereNull('parent_id')->get();       
        $filters = \App\Models\Filter::all();
        $plans = \OhMyBrew\ShopifyApp\Models\Plan::all();
        $active_icon = \App\Models\Icon::find($setting->icon_id);
        return view('shopify.ambassador')->with(['shop' => $shop, 'setting' => $setting, 'icon_data' =>$icons_data, 'categories' => $categories, 'filters' => $filters, 'plans' => $plans, 'active_charge'=> $active_charge, 'active_charge_status' => $active_charge_status, 'active_icon' => $active_icon]);
    }
    // public function ambassadordata(){
    //     $data = \App\Models\Icon::paginate(60);
    //     return response()->json($data);
    // }
    public function ambassadordata(Request $request){
      // $categories_count = \App\Models\Category::whereNull('parent_id')->count();
       $categories_get = \App\Models\Category::select('id')->whereNull('parent_id')->get();
        $categories_data = [];
        foreach ($categories_get as $key => $value) {
            $categories_data[] = $value->id;
        }
        if($request->cat_id =='0'){
            $data = \App\Models\Icon::paginate(15);
        }else{
            if (in_array($request->cat_id, $categories_data)) {
                $categories = \App\Models\Category::where('parent_id', $request->cat_id)->get();
                    foreach ($categories as $category) {
                        $datas[] = $category->id;
                    }
            }
            // if($request->cat_id <= $categories_count)
            // {
            //     $categories = \App\Models\Category::where('parent_id', $request->cat_id)->get();
            //     foreach ($categories as $category) {
                    
            //         $datas[] = $category->id;
            //     }
                
            // }
            $datas[] = $request->cat_id;
           $data = \App\Models\Icon::whereIn('category_id', $datas)->paginate(15);        
        }
        return response()->json($data);
    }
    public function Plan(){
        $shop = ShopifyApp::shop();
         $charge = $shop->planCharge();
          if($charge){
            $active_charges = $charge->retrieve();
            $active_charge =$active_charges->name;
            $status = $active_charges->status;
         }else{
             $active_charge =  'BEGINNERS';
             $status = 'active';
         }       //print_r($charge->retrieve()); 
        // die;
        $plans = \OhMyBrew\ShopifyApp\Models\Plan::all();
        return view('shopify.plan')->with(['shop' => $shop, 'plans'=> $plans , 'active_charge'=>$active_charge, 'status'=>$status]);
    }
    public function faq(){
        $shop = ShopifyApp::shop();
        return view('shopify.faq')->with(['shop' => $shop]);
    }

    /**
     * Redirects to billing screen for Shopify.
     *
     * @param \OhMyBrew\ShopifyApp\Models\Plan $plan The plan.
     *
     * @return \Illuminate\View\View
     */
    public function billing(Request $request, $id)
    {
        
        $plan =Plan::find($id);

        // If the plan is null, get a plan
        if (is_null($plan) || ($plan && !$plan->exists)) {
            $plan = Plan::where('on_install', true)->first();
        }
        
        if ($plan->price > 0) {
            // Get the confirmation URL
            $bp = new BillingPlan(ShopifyApp::shop(), $plan);
            $url = $bp->confirmationUrl();
            //$request->session()->flash('status', 'Your Plan Change Successfully');
            // Do a fullpage redirect
            return View::make('shopify-app::billing.fullpage_redirect', compact('url'));
        } else {
             $shop = ShopifyApp::shop();
             $charge = $shop->planCharge();
             $active_charge = $charge->retrieve();
             if ($active_charge->status != 'cancelled') {
                $plan_deleted = $shop->api()->rest(
                    'DELETE',
                    "/admin/{$plan->typeAsString(true)}/{$active_charge->id}.json"
                )->body;
                 if ($charge && !$charge->isDeclined() && !$charge->isCancelled()) {
                    $charge->cancel();
                }
             }
             $url = route('plan');
             // Do a fullpage redirect
            // $request->session()->flash('status', 'Your Plan Change Successfully');
             return View::make('shopify-app::billing.fullpage_redirect', compact('url'));
        }
    }
}
