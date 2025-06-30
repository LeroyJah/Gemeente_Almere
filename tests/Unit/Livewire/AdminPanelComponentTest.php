<?php

namespace Tests\Unit\Livewire;

use App\Livewire\AdminPanel;
use Livewire\Livewire;
use Tests\TestCase;

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
