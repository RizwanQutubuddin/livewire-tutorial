<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
            <h1>This is user->profile component</h1>
                {{-- The Master doesn't talk, he acts. --}}
            </div>
        blade;
    }
}
