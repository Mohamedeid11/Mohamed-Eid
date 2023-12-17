<!DOCTYPE html>
<html lang="en">
<head>
@include('Dashboard.Layouts.Seo')
</head>
<body>
<!-- BEGIN #app -->
<div id="app" class="app">
    <!-- BEGIN #header -->
    @include('Dashboard.Layouts.header')
    <!-- END #header -->

    <!-- BEGIN #sidebar -->
    @include('Dashboard.Layouts.sidebar')
    <!-- END #sidebar -->

    <!-- BEGIN mobile-sidebar-backdrop -->

    <!-- END mobile-sidebar-backdrop -->

    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <!-- BEGIN row -->
        <div class="row">
           @yield('content')
        </div>
        <!-- END row -->
    </div>
    <!-- END #content -->

    <!-- BEGIN btn-scroll-top -->
    @include('Dashboard.Layouts.footer')
    <!-- END btn-scroll-top -->
</div>
<!-- END #app -->

<!-- ================== BEGIN core-js ================== -->
@include('Dashboard.Layouts.foot')
<!-- ================== END core-js ================== -->

@yield('scripts')
</body>
</html>
