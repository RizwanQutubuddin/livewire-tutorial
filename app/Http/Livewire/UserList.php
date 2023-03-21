<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserList extends Component
{
    public $user;
    public $name;
    public function mount($name)
    {
        // $this->user = $user;
        $this->name = $name;
    }
    public function render()
    {
        return view('livewire.user-list');
    }
}
