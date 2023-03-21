<div>
    <h1>Name Component</h1>
    @foreach($names as $name)
    <p>@livewire('user-list',['name'=>$name])</p>
    @endforeach
    <h1>User list from Database</h1>

</div>
