<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <h2>this is inline component</h2>
            </div>
        blade;
    }
}
