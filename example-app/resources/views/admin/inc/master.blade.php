<!DOCTYPE html>
<html lang="en">
@include('admin.inc.head');
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('Adminasset')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('admin.inc.nav');
  <!-- /.navbar -->

  <!-- Main Sidebar Container --> </a>
  @include('admin.inc.aside');




  <!-- Content Wrapper. Contains page content -->
  {{-- @yield('content'); --}}
  @yield('majorform');
  @yield('doctortable');

  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('admin.inc.scripts');
</body>
</html>
