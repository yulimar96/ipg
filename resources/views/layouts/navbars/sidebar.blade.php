<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ asset('material') }}/img/sidebar-3.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __(config('app.name')) }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'notificatis' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('inicio') }}">
          <i class="material-icons">dashboard</i>
          <p>{{ __('Inicio') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'Registrar Pozo' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('np.index') }}">
          <i class="material-icons">laptop</i>
          <p>{{ __('Registrar Pozo') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'rehabilitado' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('rehabilitado') }}" >
          <i class="material-icons">build</i>
          <p>{{ __('Rehabilitación') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'mantenimiento' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('mantenimiento') }}">
          <i class="material-icons">engineering</i>
          <p>{{ __('Mantenimiento') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'inoperativo' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('inoperativo') }}">
          <i class="material-icons">block</i>
          <p>{{ __('Inoperativo') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'Estados' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons"><span class="material-icons">edit_location</span></i>
          <p>{{ __('Estados') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'Hidrologicas' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">domain</i>
          <p>{{ __('Hidrológicas') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'Por Mes' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">calendar_today</i>
          <p>{{ __('Por Mes') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      {{-- <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Laravel Examples') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li> --}}
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notificatis' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link text-white bg-purple" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="material-icons text-white">logout</i>
          <p>{{ __('Desconectar') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
