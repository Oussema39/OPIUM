<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.bootstrapdash.com/demo/purple-admin-free/pages/samples/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Mar 2021 10:15:32 GMT -->

@include('dashboard.head')
@yield('css')

  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      @include('dashboard.header')
      <!--header hné-->
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('dashboard.sidebar')
        <!--sidebar hné-->
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          @include('dashboard.footer')
          <!--footer hné-->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('dashboard.script')
    @yield('js')
    <!--script hné-->
    <!-- plugins:js -->
    
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>

<!-- Mirrored from www.bootstrapdash.com/demo/purple-admin-free/pages/samples/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Mar 2021 10:15:32 GMT -->
</html>