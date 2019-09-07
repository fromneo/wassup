<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DescriptionToPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plans', function (Blueprint $table) {
            $table->string('description')->nullable();
            $table->string('icons')->nullable();
            $table->string('header')->nullable();
            $table->string('feature')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plans', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('icons');
            $table->dropColumn('header');
            $table->dropColumn('feature');
        });
    }
}
