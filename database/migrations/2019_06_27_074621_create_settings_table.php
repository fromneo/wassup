<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('shop_id');
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
            $table->unsignedInteger('icon_id');
            $table->foreign('icon_id')->references('id')->on('icons')->onDelete('cascade');
            $table->string('welcome_msg')->nullable()->default('Hey Wassup! I have a surprise gift for you. Want it?');
            $table->string('newsletter_msg')->nullable()->default('Give me a way to send you your gift.');
            $table->string('discount_msg')->nullable()->default('Awesome! Here is your 10% Discount Voucher.');
            $table->string('discount_code')->nullable();
            $table->string('bg_color')->nullable()->default('#6568FE');
            $table->string('text_color')->nullable()->default('#FFFFFF');
            $table->string('widget_position')->nullable()->default('bottom-right');
            $table->string('widget_trigger')->nullable()->default('window-load');
            $table->string('load_timing')->nullable()->default('20');
            $table->string('product_type')->nullable();
            $table->string('annual_revenue')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
