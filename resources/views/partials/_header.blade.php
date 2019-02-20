<header>
  <div class="container">
    <div class="header_left">
      <img src="{{ asset('img/logo.png')}}" alt="">
    </div>
    <div class="header_right">
      <ul>
        <li class="nav_item{{ (Request::route()->getName() == 'home') ? ' active' : null }}">
          <a href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav_item{{ (Request::route()->getName() == 'corso') ? ' active' : null }}">
          <a href="{{ route('corso') }}">Corso</a>
        </li>
        <li class="nav_item{{ (Request::route()->getName() == 'metodo') ? ' active' : null }}">
          <a href="{{ route('metodo') }}">Metodo</a>
        </li>
        <li class="nav_item{{ (Request::route()->getName() == 'privacy_policy') ? ' active' : null }}">
          <a href="{{ route('privacy_policy') }}">Privacy Policy</a>
        </li>
        <li class="nav_item{{ (Request::route()->getName() == 'lavora_con_noi') ? ' active' : null }}">
          <a href="{{ route('lavora_con_noi') }}">Lavora Con Noi</a>
        </li>
        <li><a href="#" class="nav_btn">Iscriviti</a> </li>
      </ul>
    </div>
  </div>
</header>
