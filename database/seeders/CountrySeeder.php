<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get('https://restcountries.com/v3.1/all');
        $countries = $response->json();

        foreach ($countries as $country) {
            DB::table('countries')->insert([
                'name' => $country['name']['common'],
                // You might want to insert other information like ISO codes, etc.
            ]);
        }
    }
}
