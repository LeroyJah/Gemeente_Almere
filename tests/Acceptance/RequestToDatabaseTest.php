<?php

namespace Tests\Acceptance;

use App\Models\Validate;

class RequestToDatabaseTest
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
