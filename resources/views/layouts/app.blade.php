<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Favicons -->
        <link href="{{asset('admin/assets/img/favicon.png')}}" rel="icon">
        <link href="{{asset('admin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
        <link href="{{asset('admin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">

        <!-- =======================================================
        * Template Name: NiceAdmin - v2.3.1
        * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">


            
  
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
   

   <!-- Script -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" ></script>

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

           

            <!-- Page Content -->
            <main id="main" class="main">
                @include('message.flash-message')

                {{ $slot }}
            </main>
        </div>
        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{asset('admin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/chart.js/chart.min.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/echarts/echarts.min.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/quill/quill.min.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/php-email-form/validate.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{asset('admin/assets/js/main.js')}}"></script>
        <script src="{{asset('admin/assets/js/lga.js')}}"></script>
        <script src="{{asset('admin/assets/js/lga.min.js')}}"></script>
        

        <!--Ajax Request for pensioneers--->
        <!-- Script -->
   <script type='text/javascript'>
    

$(document).ready(function(){
 
  $('#empTable').on('click','.viewdetails',function(){
      var empid = $(this).attr('data-id');

      if(empid > 0){

         // AJAX request
         var url = "{{ route('getEmployeeDetails',[':empid']) }}";
         url = url.replace(':empid',empid);

         // Empty modal data
         $('#tblempinfo tbody').empty();

         $.ajax({
             url: url,
             dataType: 'json',
             success: function(response){

                 // Add employee details
                 $('#tblempinfo tbody').html(response.html);

                 // Display Modal
                 $('#empModal').modal('show'); 
             }
         });
      }
  });

});
    </script>
    </body>
</html>
