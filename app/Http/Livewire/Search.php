<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $msg = 'message from search component';
    public function updateMsg(){
        $this->msg = "Message has been update";
    }
    public function updateMsgWithParamter($str)
    {
        $this->msg = $str;
    }
    public function render()
    {
        $data = ['name' => 'Rizwan', 'email' => 'rizwan@gmail.com'];
        return view('livewire.search',['data'=>$data]);
    }
}
