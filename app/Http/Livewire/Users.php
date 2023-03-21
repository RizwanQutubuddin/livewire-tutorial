<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public $names = ['Rizwan', 'Shabana', 'Uzaif', 'Umar'];
    public $users;
    public function render()
    {
        $this->users = User::all();
        return view('livewire.users');
    }
}
