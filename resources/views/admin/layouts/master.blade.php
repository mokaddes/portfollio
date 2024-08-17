<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

@include('admin.layouts.head')
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">


@include('admin.layouts.header')

@include('admin.layouts.sidebar')

@yield('content')

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

@include('admin.layouts.footer')


@include('admin.layouts.scripts')
@stack('scripts')

</body>
<!-- END: Body-->

</html>
