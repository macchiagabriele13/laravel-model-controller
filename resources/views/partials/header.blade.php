<header>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active {{ Route::currentRouteName()=== 'home' ? 'active' : ''}}" href="{{route('home')}}" aria-current="page">Home Page</span></a>
            <a class="nav-item nav-link {{ Route::currentRouteName()=== 'about' ? 'active' : ''}}" href="{{route('about')}}">About</a>
        </div>
    </nav>


</header>