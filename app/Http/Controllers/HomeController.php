<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Shop;
use \OhMyBrew\ShopifyApp\Models\Shop;
use \OhMyBrew\ShopifyApp\Facades\ShopifyApp;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $shop = Shop::whereNotNull('shopify_token')->orderBy('id', 'desc')->paginate(10);
        return view('admin.home')->with(['shop' => $shop]);
    }
}
