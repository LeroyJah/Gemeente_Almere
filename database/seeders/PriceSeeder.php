<?php

namespace Database\Seeders;

use App\Models\Price;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    private $bedragen = [
        ["occassion" => "geboorte", "amount" => 25],
        ["occassion" => "ziek", "amount" => 25],
        ["occassion" => "ziek 3 weken", "amount" => 25],
        ["occassion" => "ziek 3 maanden", "amount" => 25],
        ["occassion" => "ziekenhuis opname", "amount" => 25],
        ["occassion" => "12,5 jaar huwelijk", "amount" => 25],
        ["occassion" => "25 jaar huwelijk", "amount" => 25],
        ["occassion" => "40 jaar huwelijk", "amount" => 40],
        ["occassion" => "pensioen", "amount" => 25],
        ["occassion" => "30ste verjaardag", "amount" => 25],
        ["occassion" => "40ste verjaardag", "amount" => 25],
        ["occassion" => "50ste verjaardag", "amount" => 25],
        ["occassion" => "60ste verjaardag", "amount" => 25],
        ["occassion" => "65ste verjaardag", "amount" => 25],
        ["occassion" => "12,5 jaar ambtenaar", "amount" => 25],
        ["occassion" => "25 jaar ambtenaar", "amount" => 25],
        ["occassion" => "40 jaar ambtenaar", "amount" => 40],
        ["occassion" => "overlijden", "amount" => 50]
    ];

    public function run(): void
    {
        Price::insert($this->bedragen);
    }
}
