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
    <li>
        <pre>
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

<h3>property binding</h3>
<ul>
    <li>C:\wamp64\www\laravel-tutorial\livewire-tutorial>php artisan make:livewire search</li>
    <li>Http->livewire->search.php</li>
    <li>
        <pre>
            public $msg='this is public message';
            public function mount(){ //this function is run On load, 
                $this->msg = 'this is mount funtion';
            }
            public function render()
            {
                return view('livewire.search');
            }
        </pre>
    </li>
    <li>open views->livewire->search.php</li>
    <li>code it=>
        <pre>
            <div>
                <h1>Search Component</h1>
                <p>{{$msg}}</p>
                <input type="text" wire:model.debounce.1000ms='msg'>
            </div>
        </pre>
    </li>
</ul>

<h3>Action</h3>
<ul>
    <li>web.php
        <pre>
           Route::view('welcome')
        </pre>
    </li>
    <li>views->welcome.php
        <pre>
            @livewireStyles
            @livewire.search
            @livewireScripts
        </pre>
    </li>
    <li>C:\wamp64\www\laravel-tutorial\livewire-tutorial>php artisan make:livewire search</li>
    <li>Http->livewire->search.php</li>
    <li>
        <pre>
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
                    return view('livewire.search');
                }
            }
        </pre>
    </li>
    <li>open views->livewire->search.php</li>
    <li>code it=>
        <pre>
           <div>
                <h1>Search Component</h1>
                <h2>{{$msg}}</h2>

                <button wire:click="updateMsg">Update Message</button>
                <button wire:mouseover="updateMsgWithParamter('asdf')">Update Message with paramenter</button>
            </div>
        </pre>
    </li>
</ul>

<h3>Action</h3>
<ul>
    <li>web.php
        <pre>
           Route::view('welcome')
        </pre>
    </li>
    <li>views->welcome.php
        <pre>
            @livewireStyles
            @livewire.search
            @livewireScripts
        </pre>
    </li>
    <li>C:\wamp64\www\laravel-tutorial\livewire-tutorial>php artisan make:livewire search</li>
    <li>Http->livewire->search.php</li>
    <li>
        <pre>
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
                    return view('livewire.search');
                }
            }
        </pre>
    </li>
    <li>open views->livewire->search.php</li>
    <li>code it=>
        <pre>
           <div>
                <h1>Search Component</h1>
                <h2>{{$msg}}</h2>

                <button wire:click="updateMsg">Update Message</button>
                <button wire:mouseover="updateMsgWithParamter('asdf')">Update Message with paramenter</button>
            </div>
        </pre>
    </li>
</ul>


<h3>Action</h3>
<ul>
    <li>C:\wamp64\www\laravel-tutorial\livewire-tutorial>php artisan make:livewire profile</li>
    <li>Http->livewire->profile.php</li>
    <li>open views->livewire->profile.php</li>
    <li>code it=>
        <pre>
            <div>
                {{-- The best athlete wants his opponent at his best. --}}
                <h1>Profile Component</h1>
                <h3>{{$name}}</h3>
                <h3>{{$counter}}</h3>
                <input type="text" wire:model='name'>
                <button wire:click="updateName">update</button>
            </div>
        </pre>
    </li>
    <li>web.php
        <pre>
           Route::view('welcome')
        </pre>
    </li>
    <li>views->welcome.php
        <pre>
            @livewireStyles
            @livewire.profile
            @livewireScripts
        </pre>
    </li>
    
    <li>
        <pre>
            class Profile extends Component
            {
                public $name = 'Rizwan';
                public $counter = 0;
                public function mount() //ready the component then this funciton run automatically.
                {
                    $this->name = 'Shabana';
                }
                public function updateName() //update the component then this funciton run automatically.
                {
                    $this->name = 'Uzaif';
                }
                public function hydrate() //update the component then this funciton run automatically.
                {
                    $this->counter ++;
                }
                public function updated() //update the binding property then this funciton run automatically.
                {
                    $this->counter ++;
                }
                public function render()
                {
                    return view('livewire.profile');
                }
            }
        </pre>
    </li>
    
</ul>