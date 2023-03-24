<div>
    @include('livewire.create')
    @include('livewire.update')
    @include('livewire.delete')
    <section>
        <style>
            nav svg{
                max-height:20px;
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if(session()->has('message'))
                        <div class="alert alert-success" >{{session('message')}}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3>All Students
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">
                                            Add New Student
                                        </button>
                                    </h3>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Search.." name="search" wire:model="searchTerm"/>
                                </div>
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $student)
                                        <tr>
                                            <td>{{$student->first_name}}</td>
                                            <td>{{$student->last_name}}</td>
                                            <td>{{$student->email}}</td>
                                            <td>{{$student->phone}}</td>
                                            <td>
                                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target = "#updateStudentModal" wire:click.prevent="edit({{$student->id}})">
                                                    Edit
                                                </button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target = "#deleteStudentModal" wire:click.prevent="deleting({{$student->id}})">
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                            {{$students->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
