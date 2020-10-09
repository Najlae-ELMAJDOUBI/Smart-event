<div class="wrapper ">
@if(auth::user()->role == 2)
  @include('layouts.navbars.sidebar2')
@endif
@if(auth::user()->role == 1)
  @include('layouts.navbars.sidebar')
@endif
@if(auth::user()->role == 3)
  @include('layouts.navbars.sidebar3')
@endif
  <div class="main-panel">
    @include('layouts.navbars.navs.auth')
    @yield('content')
    @include('layouts.footers.auth')
  </div>
</div>
