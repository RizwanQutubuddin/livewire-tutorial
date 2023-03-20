<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public $name = 'Rizwan';
    public $counter = 0;
    public function mount() //ready the component then this funciton run automatically.
    {
        $this->name = 'Shabana';
    }
    public function updateName() //update the component then this funciton run automatically.
    {
        $this->name = 'Uzaif';
    }
    public function hydrate() //update the component then this funciton run automatically.
    {
        $this->counter ++;
    }
    public function updated() //update the binding property then this funciton run automatically.
    {
        $this->counter ++;
    }
    public function render()
    {
        return view('livewire.profile');
    }
}
