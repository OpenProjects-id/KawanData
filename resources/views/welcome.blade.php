@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">

    <link rel="icon" href="{{ asset('images/icon.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <title>Kawan Data Indonesia</title>
</head>

<body>
    
    <section class="banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12 copywriting">
                            <p class="story">
                                BELAJAR DARI AHLINYA
                            </p>
                            <h1 class="header">
                                Mulai Karirmu Menjadi <br> <span class="text-purple">Data Scientist</span> Sekarang!
                            </h1>
                            <p class="support">
                                Kami di <span class="text-purple">KawanData</span> berusaha untuk membantu mereka <br>
                                yang ingin belajar dan memulai karir menjadi <span class="text-purple">Data
                                    Scientist</span>.
                            </p>
                            <p class="cta">
                                <a href="#" class="btn btn-master btn-primary">
                                    Mulai Belajar
                                </a>
                            </p>
                        </div>
                        <div class="col-lg-6 col-12 text-center">
                            <a href="#">
                                <img src="{{ asset('images/banner.png') }}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row brands">
                <div class="col-lg-12 col-12 text-center">
                    <img src="{{ asset('images/brands.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="benefits">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        KEUNTUNG BELAJAR DI <span class="text-purple">KawanData</span>
                    </p>
                    <h2 class="primary-header">
                        Belajar Lebih Cepat dan Lebih Baik
                    </h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{ asset('images/ic_globe.png') }}" class="icon" alt="">
                        <h3 class="title">
                            Diversity
                        </h3>
                        <p class="support">
                            Belajar dari siapapun tentang <br>keterampilan data
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{ asset('images/ic_globe-1.png') }}" class="icon" alt="">
                        <h3 class="title">
                            A.I Guideline
                        </h3>
                        <p class="support">
                            KawanData akan memandu kamu mengikuti alur belajar yang tepat
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{ asset('images/ic_globe-2.png') }}" class="icon" alt="">
                        <h3 class="title">
                            1-1 Mentoring
                        </h3>
                        <p class="support">
                            Akan ada sesi 1 on 1 mentoring <br>ketika belajar di KawanData
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{ asset('images/ic_globe-3.png') }}" class="icon" alt="">
                        <h3 class="title">
                            Future Job
                        </h3>
                        <p class="support">
                            Dapatkan pekerjaan di perusahaan partner KawanData
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="steps">
        <div class="container">
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{ asset('images/step1.png') }}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting">
                    <p class="story">
                        KARIR YANG LEBIH BAIK
                    </p>
                    <h2 class="primary-header">
                        Persiapkan Dirimu
                    </h2>
                    <p class="support">
                        Kami sangat peduli terhadap mentee-mentee yang belajar <br>di tempat kami sehingga akan ada sesi
                        wawancara <br>untuk mengetahui potensi mentee di masa depan
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                            Lebih Lanjut
                        </a>
                    </p>
                </div>
            </div>
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-left copywriting pl-150">
                    <p class="story">
                        BELAJAR SUNGGUH-SUNGGUH
                    </p>
                    <h2 class="primary-header">
                        Selesaikan Tugas Akhir Berupa Proyek
                    </h2>
                    <p class="support">
                        Setiap mentee akan diundang ke dalam grup untuk saling berdiskusi dan juga berkonsultasi perihal
                        proyek akhir
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                            Lihat Demo
                        </a>
                    </p>
                </div>
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{ asset('images/step2.png') }}" class="cover" alt="">
                </div>

            </div>
            <div class="row item-step">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{ asset('images/step3.png') }}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting">
                    <p class="story">
                        PROYEK AKHIR
                    </p>
                    <h2 class="primary-header">
                        Hari Presentasi
                    </h2>
                    <p class="support">
                        Belajar bagaimana mempresentasikan hasil kerja kamu dalam <br>proyek akhir dengan kemampuan
                        presentasi dan juga story telling.
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                            Showcase
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing">
        <div class="container">
            <div class="row pb-70">
                <div class="col-lg-5 col-12 header-wrap copywriting">
                    <p class="story">
                        CUKUP INVESTASIKAN WAKTUMU
                    </p>
                    <h2 class="primary-header text-white">
                        Mulai Perjalananmu
                    </h2>
                    <p class="support">
                        Kami punya beberapa modul kemampuan data <br>yang bisa kamu pelajari dan semuanya <span
                            class="story">GRATIS</span>
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-thirdty me-3">
                            Lihat Syllabus
                        </a>
                    </p>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12 py-3">
                            <div class="table-pricing paket-biasa">
                                <p class="story text-center">
                                    BARU MULAI
                                </p>
                                <h1 class="price text-center">
                                    Basic Python
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        Operasi Matematika
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        Tipe Data
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        Kondisi dan Perulangan
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        Fungsi, Kelas, Try Catch
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="{{ route('checkout.create', 'basic-python') }}"
                                        class="btn btn-master btn-primary w-100 mt-3">
                                        Ambil Kelas Ini
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 py-3">
                            <div class="table-pricing paket-biasa">
                                <p class="story text-center">
                                    LUMAYAN PAHAM
                                </p>
                                <h1 class="price text-center">
                                    Basic Data Science
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        Pengenalan Library
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        Numpy
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        Pandas
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                    <p>
                                        Matplotlib
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="{{ route('checkout.create', 'basic-data-science') }}"
                                        class="btn btn-master btn-secondary w-100 mt-3">
                                        Ambil Kelas Ini
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        SUCCESS STUDENTS
                    </p>
                    <h2 class="primary-header">
                        We Really Love <span class="text-purple">KawanData</span>
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{ asset('images/stars.svg') }}" alt="">
                                <p class="message">
                                    I was not really into code but after they teach me how to train my logic then I was
                                    really fall in love with code
                                </p>
                                <div class="user">
                                    <img src="{{ asset('images/fanny_photo.png') }}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Fanny
                                        </h4>
                                        <p class="role">
                                            Developer at Google
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{ asset('images/stars.svg') }}" alt="">
                                <p class="message">
                                    Code is really important if we want to build a company and strike to the win
                                </p>
                                <div class="user">
                                    <img src="{{ asset('images/angga.png') }}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Angga
                                        </h4>
                                        <p class="role">
                                            CEO at BWA Corp
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{ asset('images/stars.svg') }}" alt="">
                                <p class="message">
                                    My background is design and art but I do really love how to make my design working
                                    in the development phase
                                </p>
                                <div class="user">
                                    <img src="{{ asset('images/beatrice.png') }}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Beatrice
                                        </h4>
                                        <p class="role">
                                            QA at Facebook
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row copyright">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.footer')
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script> --}}

</body>

</html>

@endsection
