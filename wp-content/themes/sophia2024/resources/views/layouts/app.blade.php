<!-- HEADER -->
@include('layouts.app.header')
<!-- FIN HEADER -->

<!-- NAVIGATION -->
@include('layouts.app.navigation')
<!-- FIN NAVIGATION -->

<!-- MAIN -->
@yield('content')
<!-- FIN MAIN -->


@hasSection('sidebar')
@yield('sidebar')
@endif

<!-- BANNER -->
@include('partials.banner.798x90')
<!-- FIN BANNER -->

<!-- FOOTER -->
@include('layouts.app.footer')
<!-- FIN FOOTER -->

<!-- FIXED FOOTER -->
@include('layouts.app.fixed-footer')
<!-- FIN FIXED FOOTER -->