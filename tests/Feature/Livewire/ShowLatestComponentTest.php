<?php

namespace Tests\Feature\Livewire;

use App\Livewire\ShowLatest;
use Livewire\Livewire;
use Tests\TestCase;

class ShowLatestComponentTest extends TestCase
{
    /**
     * Testing if the Livewire component renders properly.
     */
    public function test_renders_component_successfully(): void
    {
        Livewire::test(ShowLatest::class)->assertStatus(200);
    }
}
