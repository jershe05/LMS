<div class="wrapper ">
  @include('frontend.layouts.navbars.sidebar')
  <div class="main-panel">
    @include('frontend.layouts.navbars.navs.auth')
    @yield('content')
    @include('frontend.layouts.footers.auth')
  </div>
</div>
