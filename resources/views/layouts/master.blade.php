<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{url('/assets/')}}"
  data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>
        {{ $titlePage }} | {{ config('app.name') }} 
    </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ url('/assets/img/favicon/favicon.ico') }}" />

    @include('layouts/sections/styles')

    @include('layouts/sections/scriptsIncludes')
   
  </head>

  <body>

  <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        @include('layouts/sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

         @include('layouts/navbar')

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">

            @yield('content')
            

            @include('layouts/footer')

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
  
    @include('layouts/sections/scripts')

     <script>
        $(document).ready(function() {
               var status = "{{ session('status') }}";
               if(status){
                      toastr.success(status, "Success", {
                      "closeButton": true,
                      "progressBar": true,
                      "positionClass": "toast-top-right",
                      "timeOut": "8000" // duration in milliseconds
                      });
               }

               var error = "{{ session('error') }}";
               if(error){
                      toastr.error(status, "Error", {
                      "closeButton": true,
                      "progressBar": true,
                      "positionClass": "toast-top-right",
                      "timeOut": "8000" // duration in milliseconds
                      });
               }
        });
      </script>




  </body>
</html>
