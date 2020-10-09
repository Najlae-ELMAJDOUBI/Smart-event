<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('Smart Events') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin') }}">
          <i class="material-icons" >dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="material-icons">content_paste</i>
          <p>{{ __('Tables') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('table') }}">
                <i class="material-icons">content_paste</i>
                  <p>{{ __('Category table') }}</p>
              </a>
            </li>
          </ul>
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
              <a class="nav-link" href="{{ url('events/')}}">
                <i class="material-icons">content_paste</i>
                  <p>{{ __('Events Table') }}</p>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('profile.edit') }}">
          <i class="material-icons">perm_identity</i>
            <p>{{ __('User profile') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">chrome_reader_mode</i>
          <p>{{ __('Requests') }}</p>
        </a>
      </li>

    </ul>
  </div>
</div>
