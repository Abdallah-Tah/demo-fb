<?php

namespace App\Http\Controllers;

use App\Models\FbAds;
use Illuminate\Http\Request;
use Edbizarro\LaravelFacebookAds\Entities\AdAccount;
use Edbizarro\LaravelFacebookAds\Facades\FacebookAds;
use Laravel\Socialite\Facades\Socialite;

class FbAdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accessToken = 'EAAMzfjwbeW0BAJi1ZAwO70h6QucK3Y9vdO1tc6ZAQImB9o9BrFnZAO73SBFGZAtbqrCvWAt46rsWSGzmAK8mRQ5ZAdObruLMZBejQPW0kq8872kREhleZBODaZCZCdq7drSqfHPdpn6b0hjY0Ww5y6H97W2skZARG5oqHZABaKg6NYGK0BSt9I8k2uzN6dPQ88pjCLosvXBDc4M8RQNSZB5WrUYcYayE9lyBRN9Mq7YIK1ZAxFHldb016A2FAMq23XZA4CndQZD';
        $access = FacebookAds::init($accessToken);
        $ads = FacebookAds::adAccounts()->all()->map(function ($adAccount) {
            return $adAccount->ads(
                [
                    'name',
                    'account_id',
                    'account_status',
                    'balance',
                    'campaign',
                    'campaign_id',
                    'status'
                ]
            );
          });
        dd($ads);
        $fbAds = FbAds::all();
        return view('fb-ads.index', compact('fbAds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FbAds  $fbAds
     * @return \Illuminate\Http\Response
     */
    public function show(FbAds $fbAds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FbAds  $fbAds
     * @return \Illuminate\Http\Response
     */
    public function edit(FbAds $fbAds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FbAds  $fbAds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FbAds $fbAds)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FbAds  $fbAds
     * @return \Illuminate\Http\Response
     */
    public function destroy(FbAds $fbAds)
    {
        //
    }
}
