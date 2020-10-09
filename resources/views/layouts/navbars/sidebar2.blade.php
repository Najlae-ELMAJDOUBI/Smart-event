<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('Smart Events') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'details' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('details') }}">
          <i class="material-icons">chrome_reader_mode</i>
          <p>{{ __('User details') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'request' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('request') }}">
        <i class="material-icons">add_task</i>

          <p>{{ __('New Request') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'organiser' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('organiser') }}">
        <i class="material-icons">grade</i>

          <p>{{ __('Events') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'test' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('test')}}">
                <i class="material-icons">card_giftcard</i>
                  <p>{{ __('Interest Evenement') }}</p> </a>
      </li>
    </ul>
</div>
</div>
