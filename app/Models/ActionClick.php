<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActionClick extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['landing_id', 'campaign_id', 'country', 'clicked_at'];

    public function landing()
    {
        return $this->belongsTo(Landing::class);
    }
}
