<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandingsSeeder extends Seeder
{
    public function run(): void
    {
        $christmasId = DB::table('campaigns')->where('slug', 'christmas')->value('id');
        $blackFridayId = DB::table('campaigns')->where('slug', 'black-friday')->value('id');

        DB::table('landings')->upsert([
            [
                'campaign_id' => $christmasId,
                'title' => 'Christmas ES landing',
                'country' => 'ES',
                'is_catch_all' => false,
                'html' => '
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <meta charset="UTF-8">
                        <title>Christmas ES</title>
                    </head>
                    <body>
                        <h1>Join Us This Christmas in Spain</h1>
                        <p>Fill the form below to continue.</p>
                        <form method="GET">
                            <button type="submit">Continue</button>
                        </form>
                    </body>
                    </html>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'campaign_id' => $christmasId,
                'title' => 'Christmas catch-all landing',
                'country' => null,
                'is_catch_all' => true,
                'html' => '
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <meta charset="UTF-8">
                        <title>Christmas</title>
                    </head>
                    <body>
                        <h1>Join Us This Christmas</h1>
                        <p>Fill the form below to continue.</p>
                        <form method="GET">
                            <button type="submit">Continue</button>
                        </form>
                    </body>
                    </html>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'campaign_id' => $blackFridayId,
                'title' => 'Black Friday US landing',
                'country' => 'US',
                'is_catch_all' => false,
                'html' => '
                <!DOCTYPE html>
                    <html>
                    <head>
                        <meta charset="UTF-8">
                        <title>Black Friday in USA</title>
                    </head>
                    <body>
                        <h1>Join Us This Black Friday week in USA</h1>
                        <p>Fill the form below to continue this week with us.</p>
                        <form method="GET">
                            <button type="submit">Continue</button>
                        </form>
                    </body>
                    </html>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ], ['title'], ['country', 'is_catch_all', 'html', 'updated_at']);
    }
}
