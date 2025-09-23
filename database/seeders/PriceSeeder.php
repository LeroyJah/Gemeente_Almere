<?php

namespace Database\Seeders;

use App\Models\Price;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    public function run(): void
    {
        Price::insert($this->bedragen);
    }
}
