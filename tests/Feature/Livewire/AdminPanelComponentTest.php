<?php

namespace Tests\Feature\Livewire;

use App\Livewire\AdminPanel;
use Tests\TestCase;
use Livewire\Livewire;

class AdminPanelComponentTest extends TestCase
{
    /**
     * Testing if the Livewire component renders properly.
     */
    public function test_renders_component_successfully(): void
    {
        Livewire::test(AdminPanel::class)->assertStatus(200);
    }
}
