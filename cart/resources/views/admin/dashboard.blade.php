<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "GRACEAdmin  Dashboard" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ asset("/admin-lte/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">

      <!-- Header -->
      @include('admin/header')

      <!-- Sidebar -->
      @include('admin/sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            {{ $page_title or "Page Title" }}
            <small>{{ $page_description or null }}</small>
          </h1>
          <!-- You can dynamically generate breadcrumbs here -->
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">          
          <!-- Your Page Content Here -->
          @yield('content')
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Footer -->
      @include('admin/footer')

    </div><!-- ./wrapper -->
 
    <script src="{{ asset ("/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
 
    <script src="{{ asset ("/admin-lte/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
 
    <script src="{{ asset ("/admin-lte/dist/js/app.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset ("/admin-lte/plugins/jQuery/jQuery-2.1.3.min.js") }}"></script>
    <script src="{{ asset ("/admin-lte/plugins/slimScroll/jquery.slimscroll.js") }}"></script>
    <script src="{{ asset ("/admin-lte/plugins/fastclick/fastclick.min.js") }}"></script>
    <!-- Optionally, you can add Slimscroll and FastClick plugins. 
          Both of these plugins are recommended to enhance the 
          user experience -->
  </body>
</html>
