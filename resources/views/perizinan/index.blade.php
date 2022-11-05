<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description" content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose studio and portfolio HTML5 template with 8 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="Creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, studio, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq">
    <!-- Page Title -->
    <title>Personal | MegaOne HTML5 Template</title>
    <!-- Favicon -->
    <link href="{{ asset ('fo/personal/img/favicon.ico')}}" rel="icon">
    <!-- Bundle -->
    <link href="{{ asset ('fo/vendor/css/bundle.min.css')}}" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="{{ asset ('fo/vendor/css/LineIcons.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('fo/vendor/css/revolution-settings.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('fo/vendor/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('fo/vendor/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('fo/vendor/css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('fo/vendor/css/cubeportfolio.min.css')}}" rel="stylesheet">
    <!-- Style Sheet -->
    <link href="{{ asset ('fo/personal/css/page-animation.css')}}" rel="stylesheet">
    <link href="{{ asset ('fo/personal/css/style.css')}}" rel="stylesheet">
</head>

<style>
    #side-nav-scroll {
        position: fixed;
        width: 90px;
        font-size: 21px;
        overflow-y: scroll;
        top: 0;
        bottom: 0;
    }
    ::-webkit-scrollbar {
        width: 0px;
    }
</style>
<body class="signle-layout">

<!-- Preloader -->
{{-- <div class="preloader">
    <div class="centrize full-width">
        <div class="vertical-center">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Preloader End -->

<!-- Header -->
<header class="header-left">

    <!--Logo-->
    {{-- <a class="logo" href="index-personal.html">
        <h1 class="logo-text"><img src="personal/img/logo.png" alt="logo"></h1>
    </a> --}}

    <!--Hamburger-->
    <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
        <span></span>
        <span></span>
        <span></span>
    </a>
    <!-- Navigation & Social buttons -->
    <div class="site-nav" id="side-nav-scroll">

        <!-- Main menu -->
        <ul class="site-main-menu alt-font overflow-auto" id="nav">
            <li><!-- href value = data-id without # of .pt-page. Data-goto is the number of section -->
                <a class="pt-trigger" data-animation="58" data-goto="1" href="#home">
                    <i class="lni-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a class="pt-trigger" data-animation="59" data-goto="2" href="#perizinan">
                    <i class="lni-user"></i>
                    <span>Layanan Perizinan</span>
                </a>
            </li>
            <li>
                <a class="pt-trigger" data-animation="61" data-goto="3" href="#kesehatan">
                    <i class="lni-first-aid"></i>
                    <span>Layanan Kesehatan</span></a>
            </li>
            <li>
                <a class="pt-trigger" data-animation="59" data-goto="4" href="#kependudukan">
                    <i class="lni-gallery"></i>
                    <span class="list-inline-item">Layanan Kependudukan</span>
                </a>
            </li>
            <li>
                <a class="pt-trigger" data-animation="58" data-goto="5" href="#penduduk">
                    <i class="lni-emoji-smile"></i>
                    <span>Pantauan Penduduk</span>
                </a>
            </li>
            <li>
                <a class="pt-trigger" data-animation="61" data-goto="6" href="#kecamatan">
                    <i class="lni-licencse"></i>
                    <span>Layanan Kecamatan</span>
                </a>
            </li>
            <li>
                <a class="pt-trigger" data-animation="61" data-goto="7" href="#perpajakan">
                    <i class="lni-first-aid"></i>
                    <span>Layanan Perpajakan</span></a>
            </li>
            <li>
                <a class="pt-trigger" data-animation="59" data-goto="8" href="#mpp">
                    <i class="lni-gallery"></i>
                    <span>Mall Pelayanan Publik</span>
                </a>
            </li>
        </ul>
        <!-- /Main menu -->

    </div>

</header>
<!-- Header End -->

<!-- Site Main -->
<div class="main-left" id="main">

    <!-- Page changer wrapper -->
    <div class="pt-wrapper">
        <!-- Subpages -->
        <div class="subpages">

            <!-- Home -->

                    <iframe frameborder="0" style="height: 1000px; overflow:scroll; width: 100%" src="https://sswalfa.surabaya.go.id" marginheight="1" marginwidth="1" name="cboxmain" id="cboxmain" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"></iframe>


        </div>
        <!-- End of Home Subpage -->

    </div>

</div>
<!-- Site Main End -->


<!-- JavaScript -->
<script src="{{ asset ('fo/vendor/js/bundle.min.js')}}"></script>
<!-- Plugin Js -->
<script src="{{ asset ('fo/vendor/js/jquery.appear.js')}}"></script>
<script src="{{ asset ('fo/vendor/js/jquery.fancybox.min.js')}}"></script>
<script src="{{ asset ('fo/vendor/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset ('fo/vendor/js/TweenMax.min.js')}}"></script>
<script src="{{ asset ('fo/vendor/js/jquery.cubeportfolio.min.js')}}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{ asset ('fo/vendor/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset ('fo/vendor/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="{{ asset ('fo/vendor/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{ asset ('fo/vendor/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{ asset ('fo/vendor/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{ asset ('fo/vendor/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{ asset ('fo/vendor/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{ asset ('fo/vendor/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{ asset ('fo/vendor/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{ asset ('fo/vendor/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{ asset ('fo/vendor/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script>
<script src="personal/js/map.js"></script>
<!-- custom script -->
<script src="{{ asset ('fo/personal/js/page-transition.js')}}"></script>
<script src="{{ asset ('fo/vendor/js/contact_us.js')}}"></script>
<script src="{{ asset ('fo/personal/js/script.js')}}"></script>

</body>
</html>