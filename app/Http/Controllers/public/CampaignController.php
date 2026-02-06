<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Landing;

class CampaignController extends Controller
{
    public function show(string $slug)
    {
        $campaign = Campaign::where('slug', $slug)->firstOrFail();

        $country = request('country') ?? request()->header('CF-IPCountry');

        $landing = Landing::where('campaign_id', $campaign->id)->where('country', $country)->first()
            ?? Landing::where('campaign_id', $campaign->id)->where('is_catch_all', true)->firstOrFail();

        $trackUrl = route('track.click', ['landing' => $landing->id]);

        $finalHtml = str_replace('{{ action }}', $trackUrl, $landing->html);


        return response($finalHtml);
    }
}
