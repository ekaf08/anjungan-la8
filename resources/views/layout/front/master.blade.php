<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.front.meta_style')
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
    @include('layout.front.header')
</header>
<!-- Header End -->

<!-- Site Main -->
<div class="main-left" id="main">

    <!-- Page changer wrapper -->
    <div class="pt-wrapper">
        <!-- Subpages -->
        <div class="subpages">

            @yield('konten')

        </div>
        <!-- End of Home Subpage -->

    </div>

</div>
<!-- Site Main End -->

@include('layout.front.script')

</body>
</html>