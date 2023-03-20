<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <h1>Search Component</h1>
    {{-- mount function change $msg value--}}
    {{$msg}}
    <input type="text" wire:model.debounce.1000ms='msg'>
</div>
