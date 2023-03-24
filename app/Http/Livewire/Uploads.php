<?php

namespace App\Http\Livewire;

use App\Models\Upload;
use Livewire\Component;
use Livewire\WithFileUploads;

class Uploads extends Component
{
    use WithFileUploads;
    public $title;
    public $filename;

    public function fileUpload()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'filename' => 'required',
        ]);
        
        $filename = $this->filename -> store('files', 'public');
        $validatedData['filename'] = $filename;
        Upload::create($validatedData);
        session()->flash('message','File uploaded successfully');
        $this->emit('fileUploaded');
    }
    public function render()
    {
        return view('livewire.uploads');
    }
}
