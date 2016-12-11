@include('dashboard.partials.header')
<div class="mobile-menu-left-overlay"></div>
@include('dashboard.partials.sidebar')
<div class="page-content">
<div class="container-fluid">
@yield('content')
</div><!--.container-fluid-->
</div><!--.page-content-->
@include('dashboard.partials.footer')