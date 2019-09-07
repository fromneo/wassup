<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
//use App\Shop;
use \OhMyBrew\ShopifyApp\Models\Shop;
use \OhMyBrew\ShopifyApp\Facades\ShopifyApp;

class AfterAuthenticateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $shop;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Shop $shop)
    {
        $this->shop = $shop;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        logger('After authenticate');
        $shopData = $this->shop->api()->request(
                                'GET',
                                '/admin/api/shop.json',
                                []
                            )->body->shop;
        logger(json_encode($shopData));
        $this->shop->shopowner_email = $shopData->email;
        $this->shop->shopowner_name = $shopData->name;
        $this->shop->shopowner_phone = $shopData->phone;
        $this->shop->save();
    }
}
