<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

 @include('includes.head')
 @yield('page_head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
 @include('includes.top_navigation')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('includes.sidebar')
  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
    @include('includes.footer')

 
</div>
<!-- ./wrapper -->
@include('includes.script')
@yield('page_script')
</body>
</html>
