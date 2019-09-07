<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use OhMyBrew\ShopifyApp\Models\Shop;
use OhMyBrew\ShopifyApp\Facades\ShopifyApp;
use View;
use \App\Models\Setting;
use \App\Models\Mailchimp_data;
use OhMyBrew\ShopifyApp\Models\Charge;
use OhMyBrew\ShopifyApp\Models\Plan;
class ScriptController extends Controller
{
    public function script(Request $request){
        $shop = Shop::where('shopify_domain', $request->get('shop'))->whereNotNull('shopify_token')->first();
        $url = env('APP_URL');
        if($shop){
            $setting = Setting::where('shop_id', $shop->id)->first();
            if($setting){
                $icon = \App\Models\Icon::find($setting->icon_id);
                $charge = $shop->planCharge();
                if($charge){
                    $active_charges = $charge->retrieve();
                    $active_charge =$active_charges->name;
                    $active_charge_status = $active_charges->status;
                    if($active_charges->status == 'cancelled')
                    {
                        $active_charge =  'BEGINNERS';
                    }
                 }else{
                     $active_charge =  'BEGINNERS';
                     $active_charge_status = 'active';
                 } 
                $view = View::make('shopify.script', ['setting' => $setting, 'animation' => $icon->animation, 'active_charge'=>$active_charge, 'url' =>$url, 'shop_id' =>$shop->id]);

                $response = Response::make($view, 200);
                $response->header('Content-Type', 'application/javascript');
                $response->header('Access-Control-Allow-Origin', '*');
                $response->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');    
                return $response;
            }
        }
        
    }
    public function saveinDatabase(Request $request){
        $validatedData = $request->validate([
            'email' => 'required',
            'shop_id' => 'required',
        ]);
        $valid_data = Mailchimp_data::where('email', $request->email)->where('shop_id', $request->shop_id)->first();
        if(empty($valid_data)){ 
            $mailchimp_data = new \App\Models\Mailchimp_data;
            $mailchimp_data->email = $request->email;
            $mailchimp_data->shop_id = $request->shop_id;
            $mailchimp_data->save();
            return 'Done'; 
        }else{
            return 'Error';
            
        }
    }
}
