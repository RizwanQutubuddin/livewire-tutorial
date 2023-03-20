<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <h1>Profile Component</h1>
    <h3>{{$name}}</h3>
    <h3>{{$counter}}</h3>
    <input type="text" wire:model='name'>
    <button wire:click="updateName">update</button>
</div>
