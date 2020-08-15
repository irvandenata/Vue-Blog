<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


  
  <link rel="stylesheet" href="{{asset('assets/backend/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  {{-- 
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('assets/backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}"> --}}
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets/backend/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('assets/backend/images/favicon.png')}}" />
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  
  @stack('styles')
  @stack('css')
</head>

<body >
  <div id="app">
  <div  class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('layouts.backend.partial.topbar')
    <!-- partial -->
    <div class=" page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.backend.partial.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          @yield('content')
          
         
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       @include('layouts.backend.partial.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
</div>
  
  <!--   Core JS Files   -->

  {{-- <script src="{{asset('assets/backend/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('assets/backend/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('assets/backend/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assets/backend/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('assets/backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('assets/backend/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('assets/backend/js/dashboard.js')}}"></script>
  <script src="{{asset('assets/backend/js/data-table.js')}}"></script>
  <script src="{{asset('assets/backend/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assets/backend/js/dataTables.bootstrap4.js')}}"></script> --}}
  @stack('scripts')
  @stack('js')
  <script src="{{asset('js/app.js')}}"></script>
</body>

</html>