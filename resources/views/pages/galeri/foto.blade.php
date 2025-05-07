@extends('layouts.app')
@section('content')
    <!-- page title area start -->
    <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center"
        data-background="{{asset('assets/img/page-title/pattern-foto.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Galeri | Foto</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('landing') }}">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                                <li class="breadcrumb-item active" aria-current="page">Foto</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- teacher area start -->
    <section class="teacher__area pt-115 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3">
                    <div class="section__title-wrapper text-center mb-60">
                        <h2 class="section__title">Galeri Foto <br>
                            <span class="yellow-bg">Call In BK <img src="assets/img/shape/yellow-bg-2.png" alt=""></span><br>
                        </h2>
                        <p>Dokumentasi momen berharga selama kegiatan Call In BK berlangsung.</p>
                    </div>
                </div>                
            </div>
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">
                        <div class="teacher__thumb w-img fix">
                            <a href="#">
                                <img src="{{asset('assets/img/foto/galeri1.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="teacher__content">
                            <h3 class="teacher__title">Ruang BK</h3>                
                        </div>
                        <span> Ruang BK tampak dari depan</span>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">
                        <div class="teacher__thumb w-img fix">
                            <a href="#">
                                <img src="{{asset('assets/img/foto/galeri2.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="teacher__content">
                            <h3 class="teacher__title">Ruang BK</h3>                
                        </div>
                        <span> Ruang BK tampak dari depan</span>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">
                        <div class="teacher__thumb w-img fix">
                            <a href="#">
                                <img src="{{asset('assets/img/foto/galeri3.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="teacher__content">
                            <h3 class="teacher__title">Ruang BK</h3>                
                        </div>
                        <span> Ruang BK tampak dari depan</span>
                    </div>
                </div>
                <!-- You can add more items below, maintaining the grid structure -->
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">
                        <div class="teacher__thumb w-img fix">
                            <a href="#">
                                <img src="{{asset('assets/img/foto/galeri4.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="teacher__content">
                            <h3 class="teacher__title">Kegiatan BK</h3>                
                        </div>
                        <span>Kegiatan konseling kelompok</span>
                    </div>
                </div>
                <!-- Add more photos as needed -->
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">
                        <div class="teacher__thumb w-img fix">
                            <a href="#">
                                <img src="{{asset('assets/img/foto/galeri5.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="teacher__content">
                            <h3 class="teacher__title">Kegiatan BK</h3>                
                        </div>
                        <span>Kegiatan konseling kelompok</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- teacher area end -->
@endsection