<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampaignsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('campaigns')->upsert([
            [
                'slug' => 'christmas',
                'title' => 'Christmas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'black-friday',
                'title' => 'Black Friday',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ], ['slug'], ['title', 'updated_at']);
    }
}
