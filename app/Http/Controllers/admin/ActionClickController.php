<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActionClick;

class ActionClickController extends Controller
{
    public function index(){
        $raws = ActionClick::query()->selectRaw('landing_id, campaign_id, country, COUNT(*) as clicks')
        ->with('landing')->groupBy('landing_id', 'campaign_id', 'country')->get();
        
        return view('admin.action_clicks.index', compact('raws'));
    }
}
