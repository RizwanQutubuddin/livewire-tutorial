<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Livewire\WithPagination;

class Students extends Component
{
    public $ids;
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $searchTerm;

    public function resetInputFields()
    {
        $this->ids='';
        $this->first_name='';
        $this->last_name='';
        $this->email='';
        $this->phone='';
    }
    public function store()
    {
        $validatedData = $this->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'phone'=>'required'
        ]);
        Student::create($validatedData);
        session()->flash('message','Created successfully');
        $this->resetInputFields();
        $this->emit('studentAdded');
    }
    public function edit($ids)
    {
        $student = Student::where('id', $ids)->first();
        $this->ids = $student->id;
        $this->first_name = $student->first_name;
        $this->last_name = $student->last_name;
        $this->email = $student->email;
        $this->phone = $student->phone;
    }

    public function update()
    {
        $this->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'phone'=>'required'
        ]);
        if ($this->id) {
            $student = Student::find($this->ids);
            $student->update([
                'first_name'=>$this->first_name,
                'last_name'=>$this->last_name,
                'email'=>$this->email,
                'phone'=>$this->phone
            ]);
            session()->flash('message', 'Student updated successfully!');
            $this->resetInputFields();
            $this->emit('studentUpdated');
        }
    }

    public function deleting($id)
    {
        $student = Student::where('id', $id)->first();
        $this->ids = $student->id;
        $this->first_name = $student->first_name;
        $this->last_name = $student->last_name;
        $this->email = $student->email;
        $this->phone = $student->phone;
    }

    public function deleted(){
        $student = Student::where('id', $this->ids)->delete();
        if ($student) {
            session()->flash('message', 'Deleted Successfully!');
        } else {
            session()->flash('message', 'No Record found!');
        }
        $this->resetInputFields();
        $this->emit('studentDeleted');
    }

    public function render()
    {
        $searchTerm = "%" . $this->searchTerm . "%";
        $students = Student::where('first_name','LIKE',$searchTerm)
        ->orWhere('last_name','LIKE',$searchTerm)
        ->orWhere('email','LIKE',$searchTerm)
        ->orWhere('phone','LIKE',$searchTerm)
        ->orderBy('id','desc')->paginate(5);
        return view('livewire.students',['students'=>$students]);
    }
}
