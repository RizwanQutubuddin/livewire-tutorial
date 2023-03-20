<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Users extends Component
{
    public $names = ['Rizwan', 'Shabana', 'Uzaif', 'Umar'];
    public function render()
    {
        return view('livewire.users');
    }
}
