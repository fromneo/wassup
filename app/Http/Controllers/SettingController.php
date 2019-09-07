<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OhMyBrew\ShopifyApp\Models\Shop;
use OhMyBrew\ShopifyApp\Facades\ShopifyApp;

class SettingController extends Controller
{
    public function store(Request $request)
    {
    	$validatedData = $request->validate([
	        'shop_id' => 'required',
	       	'icon_id' => 'required',
	    ]);
	    $settings = \App\Models\Setting::find($request->setting_id);
	    if($settings){
	    	$settings->shop_id = $request->shop_id;
		     $settings->icon_id = $request->icon_id;
		     $settings->welcome_msg = $request->welcome_msg;
		     $settings->welcome_msg_hdr =$request->welcome_msg_hdr;
		     $settings->newsletter_msg = $request->newsletter_msg;
		     $settings->bg_color = $request->bg_color;
		     $settings->text_color = $request->text_color;
		     $settings->widget_position = $request->widget_position;
		     $settings->load_timing = $request->load_timing;
		     $settings->widget_trigger = $request->widget_trigger;
		     $settings->product_type = $request->product_type;
		     $settings->annual_revenue = $request->annual_revenue;
		     $settings->discount_code = $request->discount_code;
		     $settings->discount_msg = $request->discount_msg;
		     $settings->discount_msg_hdr = $request->discount_msg_hdr;
		     $settings->btn_bg_color = $request->btn_bg_color;
		     $settings->btn_text_color = $request->btn_text_color;
		     $settings->status = $request->status;
		     $settings->cookies_time = $request->cookies_time;
		     $settings->mailchimp_url = $request->mailchimp_url;
		     $settings->save();
		     //return redirect()->route('/')->with(['status' => 'New Settings Added successfully!']);
	    }else{
	    	 $setting = new \App\Models\Setting;
		     $setting->shop_id = $request->shop_id;
		     $setting->icon_id = $request->icon_id;
		     $setting->welcome_msg = $request->welcome_msg;
		     $setting->welcome_msg_hdr =$request->welcome_msg_hdr;
		     $setting->newsletter_msg = $request->newsletter_msg;
		     $setting->bg_color = $request->bg_color;
		     $setting->text_color = $request->text_color;
		     $setting->widget_position = $request->widget_position;
		     $setting->load_timing = $request->load_timing;
		     $setting->widget_trigger = $request->widget_trigger;
		     $setting->product_type = $request->product_type;
		     $setting->annual_revenue = $request->annual_revenue;
		     $setting->discount_code = $request->discount_code;
		     $setting->discount_msg = $request->discount_msg;
		     $setting->discount_msg_hdr = $request->discount_msg_hdr;
		     $setting->btn_bg_color = $request->btn_bg_color;
		     $setting->btn_text_color = $request->btn_text_color;
		     $setting->status = $request->status;
		     $setting->cookies_time = $request->cookies_time;
		     $setting->mailchimp_url = $request->mailchimp_url;
		     $setting->save();

	    }
	     
	    // return redirect()->route('/')->with(['status' => 'New Settings Added successfully!']);
    }
    public function status(Request $request)
    {
    	//$shop = ShopifyApp::shop();
    	$settings = \App\Models\Setting::find($request->id);  	
    	if($settings){
    		$settings->status = $request->status;
		    $settings->save();
    	}

    	//$setting = \App\Models\Setting::where('shop_id', $shop->id)->first();
    	//return view('shopify.dashboard')->with(['shop' => $shop, 'setting' => $setting]);
    }
}
