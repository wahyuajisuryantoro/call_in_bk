@extends('layouts.app')
@section('content')
    <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center"
        data-background="{{ asset('assets/img/page-title/pattern-about.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Tentang Kami</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('landing') }}">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area start -->
    <section class="about__area pt-120 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xxl-5 offset-xxl-1 col-xl-6 col-lg-6">
                    <div class="about__thumb-wrapper">

                        <div class="about__review">
                            <h5> <span>Tentang</span> Call In BK</h5>
                        </div>
                        <div class="about__thumb ml-100">
                            <img src="{{ asset('storage/' . $tentangKontent->gambar1) }}" alt="Gambar 1">
                        </div>
                        <div class="about__banner mt--210">
                            <img src="{{ asset('storage/' . $tentangKontent->gambar2) }}" alt="Gambar 2">
                        </div>

                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="about__content pl-70 pr-60 pt-25">
                        <div class="section__title-wrapper mb-25">
                            <h2 class="section__title"><br><span class="yellow-bg-big"><img
                                        src="assets/img/shape/yellow-bg-2.png" alt=""></span>{{ $tentangKontent->judul }}</h2>
                            <p>{!! $tentangKontent->isi !!}</p>              
                       </div>
                        <a href="contact.html" class="e-btn e-btn-border">Hubungi Sekarang</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
