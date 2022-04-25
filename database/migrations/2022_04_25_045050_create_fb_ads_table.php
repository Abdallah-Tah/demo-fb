<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fb_ads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ad_id');
            $table->string('ad_name');
            $table->string('adset_id');
            $table->string('adset_name');
            $table->string('campaign_id');
            $table->string('campaign_name');
            $table->string('account_id');
            $table->string('account_name');
            $table->string('ad_status');
            $table->string('adset_status');
            $table->string('campaign_status');
            $table->string('account_status');
            $table->string('ad_creative');
            $table->string('spends');
            $table->string('impressions');
            $table->string('clicks');
            $table->string('ctr');
            $table->string('cpc');
            $table->string('cpm');
            $table->string('cpp');
            $table->string('cpa');
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
        Schema::dropIfExists('fb_ads');
    }
};
