<!doctype html>
<html lang="en">
@include('admin.partial.header')
<body data-sidebar="dark">
<!-- Begin page -->
<div id="layout-wrapper">


@include('admin.partial.navbar')


@include('admin.partial.menu')


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
  @yield('content')
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
@include('admin.partial.right-sidebar')
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>


@include('admin.partial.script')


</body>
</html>
