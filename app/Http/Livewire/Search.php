<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $msg='This is msg';

    public function mount(){
        $this->msg = 'this is mount funtion';
    }

    public function render()
    {
        $data = ['name' => 'Rizwan', 'email' => 'rizwan@gmail.com'];
        return view('livewire.search',['data'=>$data]);
    }
}
