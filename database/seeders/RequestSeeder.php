<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Validate;
use Illuminate\Database\Seeder;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $requests = [
        ["name" => "Jahmil", "occassion" => "geboorte", "amount" => 25],
        ["name" => "Giorgio", "occassion" => "ziek", "amount" => 25],
        ["name" => "Alberto", "occassion" => "ziek 3 weken", "amount" => 25],
        ["name" => "Basje", "occassion" => "ziek 3 maanden", "amount" => 25],
        ["name" => "Delano", "occassion" => "ziekenhuis opname", "amount" => 25],
        ["name" => "Cherrel", "occassion" => "12,5 jaar huwelijk", "amount" => 25],
    ];
    public function run(): void
    {
        Validate::insert($this->requests);
    }
}
