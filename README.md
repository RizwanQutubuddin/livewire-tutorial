<h1>livewire install</h1>
<h2>Create project</h2>
<ul>
    <li>C:\wamp64\www\laravel-tutorial>composer create-project laravel/laravel livewire-tutorial</li>
    <li>C:\wamp64\www\laravel-tutorial>cd livewire-tutorial</li>
    <li>C:\wamp64\www\laravel-tutorial\livewire-tutorial>composer require livewire/livewire</li>
    <li>C:\wamp64\www\laravel-tutorial\livewire-tutorial>code .</li>
</ul>

<h2>Create component</h2>
<ul>
    <li>C:\wamp64\www\laravel-tutorial\livewire-tutorial>php artisan make:livewire search</li>
</ul>

<h2>Set Route for search component</h2>
<h3>Livewire component cant show access in routes so,</h3>
<ul>
    <li>add page in views folder as user-search.php,open it and write which mension below</li>
    <li>
        @livewireStyles <br>
        @livewire('search')<br>
        @livewireScripts<br>
    </li>
    <li>open routes/web.php and set route which mension below</li>
    <li>Route::view('search', 'livewire.search');</li>
</ul>

<h3>Inline Livewire component</h3>
<ul>
    <li>C:\wamp64\www\laravel-tutorial\livewire-tutorial>php artisan make:livewire profile --inline</li>
    <li>Http->livewire->Profile.php</li>
    <li>it is used for small component or have to do both work</li>
    <li>
        @livewireStyles
        <livewire:profile/>
        @livewireScripts
    </li>
</ul>

<h3>Inline Livewire component inside folder</h3>
<ul>
    <li>C:\wamp64\www\laravel-tutorial\livewire-tutorial>php artisan make:livewire user.profile --inline</li>
    <li>Http->livewire->user->Profile.php</li>
    <li>it is used for small component or have to do both work</li>
    <li>
        @livewireStyles
        <livewire:user.profile>
        @livewireScripts
    </li>
</ul>

<h3>transfer data</h3>
<ul>
    <li>C:\wamp64\www\laravel-tutorial\livewire-tutorial>php artisan make:livewire search</li>
    <li>Http->livewire->search.php</li>
    <li><pre>
        public function render()
            {
                $data = ['name' => 'Rizwan', 'email' => 'rizwan@gmail.com'];
                return view('livewire.search',['data'=>$data]);
            }
        </pre>
    </li>
    <li>open views->livewire->search.php</li>
    <li>code it=>
    <pre>
        <div>
        <h1>Search Component</h1>
        @foreach($data as $item)
            <p>{{$item}}</p>
        @endforeach
    </div>
    </pre>
    </li>
</ul>