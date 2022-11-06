@extends('layout.front.master')

@section('konten')

    <!-- Home -->
    <section id="home" class="pt-page pt-page-1" data-id="home">
        <div class="container slider-container">
            <div class="row align-items-lg-center">

                <!-- Image Area -->
                <div class="col-lg-7 order-lg-2">
                    <div class="slider-image">
                        <img src="{{ asset ('fo/personal/svg/home.svg')}}" alt="girl">
                    </div>
                </div>

                <!-- Text Area -->
                <div class="col-lg-5 wow fadeInRight">
                    <!-- Box Area -->
                    <div class="heading-box">
                        <h2><span class="main-color">KIOS</span> Layanan Publik</h2>
                        <p class="font-weight-bold">Pilih Layanan pada <span class="main-color"> Menu Sebelah Kiri</span></p>

                        {{-- <a href="javascript:void(0);" data-text="Read More" class="btn btn-green">Read More</a> --}}
                    </div>
                </div>

            </div>

            <!-- Shapes -->
            <span class="shape-square"></span>
            <span class="shape-triangle"></span>
            <span class="shape-plus"></span>
            <span class="shape-circle"></span>

        </div>
    </section>

    <!-- Perizinan -->
    <section id="perizinan" class="pt-page pt-page-2" data-id="perizinan">
        <div class="container slider-container">
            <div class="row align-items-lg-center">

                <!-- Image Area -->
                <div class="col-lg-7 order-lg-2">
                    <div class="slider-image">
                        <img src="{{ asset ('fo/personal/svg/perizinan.svg')}}" alt="girl">
                    </div>
                </div>

                <!-- Text Area -->
                <div class="col-lg-5 wow fadeInRight">
                    <!-- Box Area -->
                    <div class="heading-box">
                        <h2><span class="main-color">Layanan</span> Perizinan</h2>
                        <p class="font-weight-bold">Sistem terpadu yang melayani pendaftaran perizinan Investasi maupun perizinan Parsial di UPTSA</p>

                        <a href="{{route ('perizinan.index')}}" data-text="Klik Layanan" class="font-weight-bold btn btn-green">Klik Layanan</a>
                    </div>
                </div>

            </div>

            <!-- Shapes -->
            <span class="shape-square"></span>
            <span class="shape-triangle"></span>
            <span class="shape-plus"></span>
            <span class="shape-circle"></span>

        </div>
    </section>

    <!-- Perizinan -->
    <section id="kesehatan" class="pt-page pt-page-3" data-id="kesehatan">
        <div class="container slider-container">
            <div class="row align-items-lg-center">

                <!-- Image Area -->
                <div class="col-lg-7 order-lg-2">
                    <div class="slider-image">
                        <img src="{{ asset ('fo/personal/svg/kesehatan.svg')}}" alt="girl">
                    </div>
                </div>

                <!-- Text Area -->
                <div class="col-lg-5 wow fadeInRight">
                    <!-- Box Area -->
                    <div class="heading-box">
                        <h2><span class="main-color">Layanan</span> Kesehatan</h2>
                        <p class="font-weight-bold">Aplikasi pendaftaran online yang mempermudah warga Surabaya untuk mendapatkan layanan kesehatan</p>

                        <a href="" data-text="Klik Layanan" class="font-weight-bold btn btn-green">Klik Layanan</a>
                    </div>
                </div>

            </div>

            <!-- Shapes -->
            <span class="shape-square"></span>
            <span class="shape-triangle"></span>
            <span class="shape-plus"></span>
            <span class="shape-circle"></span>

        </div>
    </section>

    <!-- Kependudukan -->
    <section id="kependudukan" class="pt-page pt-page-4" data-id="kependudukan">
        <div class="container slider-container">
            <div class="row align-items-lg-center">

                <!-- Image Area -->
                <div class="col-lg-7 order-lg-2">
                    <div class="slider-image">
                        <img src="{{ asset ('fo/personal/svg/kependudukan.svg')}}" alt="girl">
                    </div>
                </div>

                <!-- Text Area -->
                <div class="col-lg-5 wow fadeInRight">
                    <!-- Box Area -->
                    <div class="heading-box">
                        <h2><span class="main-color">Layanan</span> Kependudukan</h2>
                        <p class="font-weight-bold">Aplikasi pendaftaran online untuk pencatatan Kelahiran, Kematian, serta Perpindahan Penduduk</p>

                        <a href="" data-text="Klik Layanan" class="font-weight-bold btn btn-green">Klik Layanan</a>
                    </div>
                </div>

            </div>

            <!-- Shapes -->
            <span class="shape-square"></span>
            <span class="shape-triangle"></span>
            <span class="shape-plus"></span>
            <span class="shape-circle"></span>

        </div>
    </section>

    <!-- Sipandu -->
    <section id="penduduk" class="pt-page pt-page-5" data-id="penduduk">
        <div class="container slider-container">
            <div class="row align-items-lg-center">

                <!-- Image Area -->
                <div class="col-lg-7 order-lg-2">
                    <div class="slider-image">
                        <img src="{{ asset ('fo/personal/svg/sipandu.svg')}}" alt="girl">
                    </div>
                </div>

                <!-- Text Area -->
                <div class="col-lg-5 wow fadeInRight">
                    <!-- Box Area -->
                    <div class="heading-box">
                        <h2><span class="main-color">Pantauan</span> Penduduk</h2>
                        <p class="font-weight-bold">Sistem Informasi Pemantauan Status Domisili Penduduk (SIPANDU) Kota Surabaya</p>

                        <a href="" data-text="Klik Layanan" class="font-weight-bold btn btn-green">Klik Layanan</a>
                    </div>
                </div>

            </div>

            <!-- Shapes -->
            <span class="shape-square"></span>
            <span class="shape-triangle"></span>
            <span class="shape-plus"></span>
            <span class="shape-circle"></span>

        </div>
    </section>

    <!-- Kecamatan -->
    <section id="kecamatan" class="pt-page pt-page-6" data-id="kecamatan">
        <div class="container slider-container">
            <div class="row align-items-lg-center">

                <!-- Image Area -->
                <div class="col-lg-7 order-lg-2">
                    <div class="slider-image">
                        <img src="{{ asset ('fo/personal/svg/kecamatan.svg')}}" alt="girl">
                    </div>
                </div>

                <!-- Text Area -->
                <div class="col-lg-5 wow fadeInRight">
                    <!-- Box Area -->
                    <div class="heading-box">
                        <h2><span class="main-color">Layanan</span> Kecamatan</h2>
                        <p class="font-weight-bold">Aplikasi pendaftaran online untuk Pelayanan Administratif Penduduk di tingkat Kecamatan</p>

                        <a href="" data-text="Klik Layanan" class="font-weight-bold btn btn-green">Klik Layanan</a>
                    </div>
                </div>

            </div>

            <!-- Shapes -->
            <span class="shape-square"></span>
            <span class="shape-triangle"></span>
            <span class="shape-plus"></span>
            <span class="shape-circle"></span>

        </div>
    </section>

    <!-- Perpajakan -->
    <section id="pajak" class="pt-page pt-page-7" data-id="pajak">
        <div class="container slider-container">
            <div class="row align-items-lg-center">

                <!-- Image Area -->
                <div class="col-lg-7 order-lg-2">
                    <div class="slider-image">
                        <img src="{{ asset ('fo/personal/svg/pajak.svg')}}" alt="girl">
                    </div>
                </div>

                <!-- Text Area -->
                <div class="col-lg-5 wow fadeInRight">
                    <!-- Box Area -->
                    <div class="heading-box">
                        <h2><span class="main-color">Layanan</span> Perpajakan</h2>
                        <p class="font-weight-bold">Layanan online terkait pendapatan daerah dan urusan perpajakan Kota Surabaya</p>

                        <a href="" data-text="Klik Layanan" class="font-weight-bold btn btn-green">Klik Layanan</a>
                    </div>
                </div>

            </div>

            <!-- Shapes -->
            <span class="shape-square"></span>
            <span class="shape-triangle"></span>
            <span class="shape-plus"></span>
            <span class="shape-circle"></span>

        </div>
    </section>

    <!-- mpp -->
    <section id="mpp" class="pt-page pt-page-7" data-id="mpp">
        <div class="container slider-container">
            <div class="row align-items-lg-center">

                <!-- Image Area -->
                <div class="col-lg-7 order-lg-2">
                    <div class="slider-image">
                        <img src="{{ asset ('fo/personal/svg/mpp.svg')}}" alt="girl">
                    </div>
                </div>

                <!-- Text Area -->
                <div class="col-lg-5 wow fadeInRight">
                    <!-- Box Area -->
                    <div class="heading-box">
                        <h2><span class="main-color">Mall Pelayanan</span> Publik</h2>
                        <p class="font-weight-bold"><a href="" data-text="Klik disini" class="btn btn-green font-weight-bold">Klik disini</a> untuk Mendaftar Antrian Mall Pelayanan Publik</p>

                        
                    </div>
                </div>

            </div>

            <!-- Shapes -->
            <span class="shape-square"></span>
            <span class="shape-triangle"></span>
            <span class="shape-plus"></span>
            <span class="shape-circle"></span>

        </div>
    </section>

@endsection