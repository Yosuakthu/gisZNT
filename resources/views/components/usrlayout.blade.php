<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>GisZNT</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
        <link href="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap-icons.css')}}" rel="stylesheet">
        <!-- Libraries Stylesheet -->
        <link href="{{ asset('tem/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{ asset('tem/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('tem/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('tem/css/style.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
      <script src="{{ asset('assets/leaflet/js/leaflet.ajax.js')}}" ></script>
         <style type="text/CSS">
          #map{
            height: 900px;
          }
         </style>


    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <x-usrtopbar></x-usrtopbar>
        <x-usrnavbar></x-usrnavbar>

        </div>
        {{$slot}}
        <!-- Navbar & Hero End -->

        <!-- JavaScript Libraries -->
      <!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('tem/lib/easing/easing.min.js')}}"></script>
        <script src="{{ asset('tem/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{ asset('tem/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('tem/lib/lightbox/js/lightbox.min.js')}}"></script>
        <!-- jQuery Mapael -->
<script src="{{ asset('assets/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{ asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>



        <!-- Template Javascript -->
        <script src="{{ asset('tem/js/main.js')}}"></script>
    </body>

</html>
