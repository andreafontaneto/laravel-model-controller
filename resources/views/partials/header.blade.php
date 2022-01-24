<header class="mb-5 af-header">

  <div class="container py-3">
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