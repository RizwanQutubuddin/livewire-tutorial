<div>
    <h1>Registration</h1>
    <form wire:submit.prevent="submit">
        <input type="text" wire:model="name" placeholder="name">
        @error('name')<span class="error">{{$message}}</span>@enderror<br>
        <input type="text" wire:model="email" placeholder="email">
        @error('email')<span class="error">{{$message}}</span>@enderror<br>

        <input type="password" wire:model="password" placeholder="password">
        @error('password')<span class="error">{{$message}}</span>@enderror<br>
        <button type="submit">Regitration</button>

    </form>
</div>
