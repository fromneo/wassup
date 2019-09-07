<?php

namespace App\Jobs;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use OhMyBrew\ShopifyApp\Models\Shop;
use OhMyBrew\ShopifyApp\Facades\ShopifyApp;
use \App\Models\Setting;

//class AppUninstalledJob extends \OhMyBrew\ShopifyApp\Jobs\AppUninstalledJob
class AppUninstalledJob implements ShouldQueue
{
	use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Shop's myshopify domain
     *
     * @var string
     */
    public $shopDomain;

    /**
     * The webhook data
     *
     * @var object
     */
    public $data;

    /**
     * Create a new job instance.
     *
     * @param string $shopDomain The shop's myshopify domain
     * @param object $webhook The webhook data (JSON decoded)
     *
     * @return void
     */
    public function __construct($shopDomain, $data)
    {
        $this->shopDomain = $shopDomain;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        logger("AppUninstalledJob");
    	logger($this->shopDomain);
    	$shop = Shop::where('shopify_domain',$this->shopDomain)->first();
        $shop->shopify_token = null;
        $shop->save();
        $setting = Setting::where('shop_id', $shop->id)->first();
        if($setting){
            $settings = \App\Models\Setting::find($setting->id);
            if ($settings) {
                $settings->delete();
            }
        }
        logger('Shop Uninstalled');
    }
}
