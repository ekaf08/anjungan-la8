@extends('fo2.layout.front.master')
@section('konten')

<!--Services content start-->
<section id="services-sec" class="services-sec padding-top">
    <div class="container">
        <div class="row our-services">
            <div class="col-12 col-lg-4 wow slideInLeft mb-4" data-wow-duration="1s">
                <div class="service-card text-center">
                    <a href="digital-university/standard-blog.html">
                        <div class="image-holder">
                            <img src="{{ asset ('fo2/digital-university/svg/perizinan.svg')}}" alt="girl" width="60">
                        </div>
                        <h3 class="service-card-heading">LAYANAN PERIZINAN</h3>
                        <p class="service-card-detail">
                            Sistem terpadu yang melayani pendaftaran perizinan Investasi maupun perizinan Parsial di UPTSA
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-4 wow slideInUp mb-4" data-wow-duration="1s">
                <div class="service-card text-center">
                    <a href="digital-university/standard-blog.html">
                        <div class="image-holder">
                            <i class="lni-cog"></i>
                        </div>
                        <h3 class="service-card-heading">STUDENT SETUP</h3>
                        <p class="service-card-detail">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit augue diam, accumsan.
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-4 wow slideInRight mb-4" data-wow-duration="1s">
                <div class="service-card text-center ">
                    <a href="digital-university/standard-blog.html">
                        <div class="image-holder">
                            <i class="lni-code"></i>
                        </div>
                        <h3 class="service-card-heading">LATEST TECHNOLOGIES</h3>
                        <p class="service-card-detail">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit augue diam, accumsan.
                        </p>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<!--Services content start-->

@endsection