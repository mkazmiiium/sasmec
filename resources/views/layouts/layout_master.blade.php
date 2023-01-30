<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>SASCOMS</title>

    <!-- vendor css -->
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/rickshaw/rickshaw.min.css') }}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/starlight.css') }}">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    @include('layouts.sidenav')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('layouts.topnav')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: MAIN PANEL ########## -->
    @yield('content')
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{ asset('assets/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/popper.js/popper.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('assets/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/d3/d3.js') }}"></script>
    <script src="{{ asset('assets/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('assets/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('assets/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/flot-spline/jquery.flot.spline.js') }}"></script>
    
    <script src="{{ asset('plugins/starlight.js') }}"></script>
    <script src="{{ asset('plugins/ResizeSensor.js') }}"></script>
    <script src="{{ asset('plugins/dashboard.js') }}"></script>
  </body>
</html>
