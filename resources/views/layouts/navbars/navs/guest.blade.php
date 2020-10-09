<!-- Navbar -->
<style>
#left {
    position:absolute;
    left:50px;
}
</style>

<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end">
   <div id='left'>
    <span><b> {{ __('Smart Events') }} </b></span>
    </diV>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a  class="nav-link">
            {{ __('Home') }}</a>
        </li>
        <li class="nav-item{{ $activePage == 'register' ? ' active' : '' }}">
          <a href="{{ route('register') }}" class="nav-link">
           {{ __('Register') }}</a>
        </li>
        <li class="nav-item{{ $activePage == 'login' ? ' active' : '' }}">
          <a href="{{ route('login') }}" class="nav-link">
             {{ __('Login') }}
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{ route('profile.edit') }}" class="nav-link">
          {{ __('Profile') }} </a>
        </li>
        <li class="nav-item">
          <a class="nav-link">
            {{ __('FAQ') }}
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'register' ? ' active' : '' }}">
          <a href="{{ route('register') }}" class="nav-link">
            {{ __('Contact Us') }}
          </a>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
