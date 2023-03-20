<div>
    <h1>User Component</h1>
    @foreach($names as $name)
    <p>@livewire('user-list',['user'=>$name])</p>
    @endforeach
    
</div>
