<!DOCTYPE html>
<html lang="en">
<head>
    @include('fo2.layout.front.meta_style')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="400" style="background-color: #ffcdd2;">

<!--Header Start-->
<header id="home" class="cursor-light">

    @include('fo2.layout.front.header')

</header>
<!--Header End-->

    @yield('konten')

<!--Animated Cursor-->
<div class="aimated-cursor">
    <div class="cursor">
        <div class="cursor-loader"></div>
    </div>
</div>
<!--Animated Cursor End-->

@include('fo2.layout.front.script')

</body>
</html>