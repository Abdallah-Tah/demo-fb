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
        //$accessToken = 'EAAMzfjwbeW0BAL6uyRKxq9Q5oN3f0EYUGPK6iygpfPj2qMBQkkjCKsT3oLZARCDC4UzwxI3KseJibv8oR5fZBS9q9XvWtCZB2yoWiWcNmOLYlqAfHw329AcPUkprTIX5ieT7Pi5AnNhLzBkvWxvuklaf9tzkMJkuxFNDM406TfKwhcsZBZC01uF9wxXSDstIZD';
        $user = Socialite::driver('facebook')->user();
        $accessToken = $user->token;
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

        return view('fb-ads.index', compact('ads'));
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
