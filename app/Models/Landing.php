<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'country', 'campaign_id', 'is_catch_all', 'html'];

    protected $casts = ['is_catch_all' => 'boolean',];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
