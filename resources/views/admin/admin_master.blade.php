<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Philanthropy Admin</title>
    <!-- plugins:css -->
    
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.png')}}" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{asset('backend/assets/js/jquery.printPage.js')}}"></script>
<script src="{{asset('backend/assets/js/jquery-2.2.4.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('backend/assets/css/select2.min.css')}}">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.body.sidebar')
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.body.header')
        <!-- partial -->
        <div class="main-panel">
          @yield('admin')

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.body.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('backend/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('backend/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('backend/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('backend/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('backend/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('backend/assets/js/misc.js')}}"></script>
    <script src="{{asset('backend/assets/js/settings.js')}}"></script>
    <script src="{{asset('backend/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('backend/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
      @if(Session::has('message'))
      var type = "{{ Session::get('alert-type', 'info') }}";
      switch(type){
        case 'info':
          toastr.info("{{ Session::get('message') }}");
          break;
        case 'success':
          toastr.success("{{ Session::get('message') }}");
          break;
        case 'warning':
          toastr.warning("{{ Session::get('message') }}");
          break;
        case 'error':
          toastr.error();("{{ Session::get('message') }}");
          break;
      }
      @endif
    </script>
     <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{asset('backend/assets/js/jquery.printPage.js')}}"></script>
<script src="{{asset('backend/assets/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('backend/assets/js/select2.min.js')}}"></script>


  </body>
</html>