<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Landing;
use App\Models\ActionClick;

class TrackController extends Controller
{
    public function click(Landing $landing){
        ActionClick::create([
            'landing_id' => $landing->id,
            'campaign_id' => $landing->campaign_id,
            'country' => $landing->country,
            'clicked_at' => now(),
        ]);

        return redirect($landing->action_url);
    }

    public function index(ActionClick $click){
        return view('admin.tracks.show', compact('click'));
    }
}
