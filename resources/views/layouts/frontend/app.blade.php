<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Metronic "Aircv" Frontend Freebie</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="{{asset('frontend/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">

        <!-- THEME STYLES -->
        <link href="{{asset('frontend/css/layout.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">

        <!--========== HEADER ==========-->
        @include('layouts/frontend/header')
       
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        @include('layouts/frontend/home')
      
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- About -->
        @include('layouts/frontend/about')
       
        <!-- End About -->

        <!-- Experience -->
        @include('layouts/frontend/experience')
        
        <!-- End Experience -->

        <!-- Work -->
        @include('layouts/frontend/work')
        
        <!-- End Work -->
            
        <!-- Contact -->

        @include('layouts/frontend/contact')
       
        <!-- End Contact -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        @include('layouts/frontend/footer')
       
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="{{asset('frontend/vendor/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('frontend/vendor/jquery-migrate.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="{{asset('frontend/vendor/jquery.easing.js')}}" type="text/javascript"></script>
        <script src="{{asset('frontend/vendor/jquery.back-to-top.js')}}" type="text/javascript"></script>
        <script src="{{asset('frontend/vendor/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('frontend/vendor/jquery.wow.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('frontend/vendor/jquery.parallax.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('frontend/vendor/jquery.appear.js')}}" type="text/javascript"></script>
        <script src="{{asset('frontend/vendor/masonry/jquery.masonry.pkgd.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('frontend/vendor/masonry/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="{{asset('frontend/js/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('frontend/js/components/progress-bar.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('frontend/js/components/masonry.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('frontend/js/components/wow.min.js')}}" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>