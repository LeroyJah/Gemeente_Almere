<?php

namespace Tests\Acceptance\Livewire;

use Livewire\Livewire;
use Tests\TestCase;

class RequestToDatabaseTest extends TestCase
{
    public function test_user_request_is_saved_to_database()
    {
        $testdata = [
            'name' => 'Marley',
            'occassion' => '40ste verjaardag',
            'amount' => '25'
        ];


    }
}
