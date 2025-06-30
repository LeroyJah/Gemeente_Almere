<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Validator;
use Livewire\Livewire;
use Tests\TestCase;

class CreateRequestTest extends TestCase{
    /**
     * Testing if the Livewire validation works properly.
     */

    public function test_user_request_gets_validated()
    {
        Livewire::test(Validator::class)
            ->set('name','Marley')
            ->set('occassion','34ste verjaardag')
            ->set('amount',50)
            ->call('storeRequest')
            ->assertHasErrors();
    }
}
