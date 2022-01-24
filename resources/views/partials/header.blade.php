<header class="mb-5 af-header">

  <div class="container d-flex align-items-center">
    
    <div class="mr-3" style="width: 50px">
      <img src="{{ asset('img/kisspng-photographic-film-vector-graphics-computer-icons-p-filmroll-icon-myiconfinder-5c579dd0458661.7829945215492459042848.png') }}" alt="">
    </div>
    
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'af-active' : '' }}" aria-current="page" href="{{ route('home') }}">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Route::currentRouteName() === 'about') ? 'af-active' : '' }}" href="{{ route('about') }}">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Route::currentRouteName() === 'contacts') ? 'af-active' : '' }}" href="{{ route('contacts') }}">CONTACT</a>
      </li>
    </ul>
  </div>
  
</header>