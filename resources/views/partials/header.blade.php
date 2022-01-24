<header class="container my-5">

  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'about') ? 'active' : '' }}" href="{{ route('about') }}">ABOUT</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'contacts') ? 'active' : '' }}" href="{{ route('contacts') }}">CONTACT</a>
    </li>
  </ul>

</header>