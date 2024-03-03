<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Foodtech Dashboard</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ asset('admin/vendors/iconic-fonts/font-awesome/css/all.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('admin/vendors/iconic-fonts/flat-icons/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/iconic-fonts/cryptocoins/cryptocoins.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css') }}">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="{{ asset('admin/assets/css/jquery-ui.min.css') }}" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="{{ asset('admin/assets/css/slick.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/css/datatables.min.css') }}" rel="stylesheet">
  <!-- Foodtech styles -->
  <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/favicon.ico') }}">
</head>

<body>
  @include('admin.layout.header')
  @yield('main-container')

  <!-- banner part start-->

  @include('admin.layout.footer')

  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="{{ asset('admin/assets/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('admin/assets/js/jquery-ui.min.js') }}"></script>
  <!-- Global Required Scripts End -->
  <!-- Page Specific Scripts Start -->
  <script src="{{ asset('admin/assets/js/Chart.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/widgets.js') }}"></script>
  <script src="{{ asset('admin/assets/js/clients.js') }}"></script>
  <script src="{{ asset('admin/assets/js/Chart.Financial.js') }}"></script>
  <script src="{{ asset('admin/assets/js/d3.v3.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/topojson.v1.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/datatables.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/data-tables.js') }}"></script>
  <!-- Page Specific Scripts Finish -->
  <!-- Foodtech core JavaScript -->
  <script src="{{ asset('admin/assets/js/framework.js') }}"></script>
  <!-- Settings -->
  <script src="{{ asset('admin/assets/js/settings.js') }}"></script>
</body>

</html>
