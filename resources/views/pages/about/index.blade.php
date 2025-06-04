@extends('layouts.app')
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        .about__thumb img,
        .about__banner img {
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .about__thumb img:hover,
        .about__banner img:hover {
            transform: scale(1.02);
        }

        .section__title {
            transition: color 0.3s ease;
        }

        .e-btn {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .e-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .about__content p {
            transition: opacity 0.3s ease;
        }
        html {
            scroll-behavior: smooth;
        }
    </style>
@endsection
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

    <section class="about__area pt-120 pb-150">
        <div class="container">
            @if ($tentangKonten->count() > 0)
                @foreach ($tentangKonten as $index => $konten)
                    @if ($index % 2 == 0)
                        <div class="row {{ $index > 0 ? 'mt-120' : '' }}" data-aos="fade-up"
                            data-aos-delay="{{ $index * 100 }}">
                            <div class="col-xxl-5 offset-xxl-1 col-xl-6 col-lg-6">
                                <div class="about__thumb-wrapper" data-aos="fade-right"
                                    data-aos-delay="{{ $index * 100 + 200 }}">
                                    <div class="about__review">
                                        <h5> <span>Tentang</span> {{ $pengaturan->nama_situs }}</h5>
                                    </div>
                                    <div class="about__thumb ml-100">
                                        <img src="{{ asset('storage/' . $konten->gambar1) }}"
                                            alt="Gambar {{ $index + 1 }}">
                                    </div>
                                    @if ($konten->gambar2)
                                        <div class="about__banner mt--210" data-aos="fade-up"
                                            data-aos-delay="{{ $index * 100 + 400 }}">
                                            <img src="{{ asset('storage/' . $konten->gambar2) }}"
                                                alt="Gambar Banner {{ $index + 1 }}">
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <div class="about__content pl-70 pr-60 pt-25" data-aos="fade-left"
                                    data-aos-delay="{{ $index * 100 + 300 }}">
                                    <div class="section__title-wrapper mb-25">
                                        <h2 class="section__title"><br><span class="yellow-bg-big"><img
                                                    src="{{ asset('assets/img/shape/yellow-bg-2.png') }}"
                                                    alt=""></span>{{ $konten->judul }}</h2>
                                        <p>{!! $konten->isi !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row mt-120" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <div class="about__content pr-70 pl-60 pt-25" data-aos="fade-right"
                                    data-aos-delay="{{ $index * 100 + 200 }}">
                                    <div class="section__title-wrapper mb-25">
                                        <h2 class="section__title"><br><span class="yellow-bg-big"><img
                                                    src="{{ asset('assets/img/shape/yellow-bg-2.png') }}"
                                                    alt=""></span>{{ $konten->judul }}</h2>
                                        <p>{!! $konten->isi !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-5 col-xl-6 col-lg-6">
                                <div class="about__thumb-wrapper" data-aos="fade-left"
                                    data-aos-delay="{{ $index * 100 + 300 }}">
                                    <div class="about__review">
                                        <h5> <span>Tentang</span> {{ $pengaturan->nama_situs }}</h5>
                                    </div>
                                    <div class="about__thumb mr-100">
                                        <img src="{{ asset('storage/' . $konten->gambar1) }}"
                                            alt="Gambar {{ $index + 1 }}">
                                    </div>
                                    @if ($konten->gambar2)
                                        <div class="about__banner mt--210" data-aos="fade-up"
                                            data-aos-delay="{{ $index * 100 + 400 }}">
                                            <img src="{{ asset('storage/' . $konten->gambar2) }}"
                                                alt="Gambar Banner {{ $index + 1 }}">
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="row mt-120">
                    <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ route('kontak') }}" class="e-btn e-btn-border">Hubungi Sekarang</a>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-12 text-center">
                        <h3>Konten belum tersedia</h3>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                easing: 'ease-out',
                once: true,
                offset: 50,
                disable: 'mobile'
            });
        });
    </script>
@endsection
