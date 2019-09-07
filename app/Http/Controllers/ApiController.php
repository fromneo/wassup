<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OhMyBrew\ShopifyApp\Models\Shop;
use OhMyBrew\ShopifyApp\Facades\ShopifyApp;

class ApiController extends Controller
{
    public function getFiveIcons()
    {
    	 $shop = ShopifyApp::shop();
    	 $icons_data = \App\Models\Icon::where('plan_id', 1)->limit(5)->get();
    	 $icons=array($shop->id,$icons_data);
    	 return $icons;
    }
}
