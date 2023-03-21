<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Registration extends Component
{
    public $name;
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.registration');
    }
    public function submit()
    {
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:3|max:10',
        ]);
        dd($this->name,$this->email,$this->password);
        // return view('livewire.registration');
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3|max:10',
        ]);
    }
}
