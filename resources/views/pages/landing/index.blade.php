@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css">
    <style>
        .category__avatar {
            width: 100px;
            height: 100px;
            overflow: hidden;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            border: 2px solid #e9ecef;
        }

        .category__avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .category__item:hover .category__avatar {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .category__avatar.size-sm {
            width: 40px;
            height: 40px;
        }

        .category__avatar.size-lg {
            width: 80px;
            height: 80px;
        }
    </style>
@endsection

@section('content')
    <!-- hero area start -->
    <section class="hero__area hero__height d-flex align-items-center grey-bg-2 p-relative">
        <div class="hero__shape">
            <img class="hero-1-circle" src="{{ asset('assets/img/shape/hero/hero-1-circle.png') }}" alt="">
            <img class="hero-1-circle-2" src="{{ asset('assets/img/shape/hero/hero-1-circle-2.png') }}" alt="">
            <img class="hero-1-dot-2" src="{{ asset('assets/img/shape/hero/hero-1-dot-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="hero__content-wrapper mt-90">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="hero__content p-relative z-index-1">
                            <h3 class="hero__title">
                                <span>{{ $hero->judul ?? 'Selamat Datang di Website' }}</span>
                                <span class="yellow-shape">{{ $pengaturan->nama_situs }}<img
                                        src="{{ asset('assets/img/shape/yellow-bg.png') }}" alt="yellow-shape"> </span>
                            </h3>
                            <p>{{ $hero->subjudul ?? 'Sampaikan keluhan dan masalah, jalan keluar pasti lebih terarah' }}
                            </p>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="hero__thumb d-flex p-relative">
                            <div class="hero__thumb-shape">
                                <img class="hero-1-dot" src="{{ asset('assets/img/shape/hero/hero-1-dot.png') }}"
                                    alt="">
                                <img class="hero-1-circle-3" src="{{ asset('assets/img/shape/hero/hero-1-circle-3.png') }}"
                                    alt="">
                                <img class="hero-1-circle-4" src="{{ asset('assets/img/shape/hero/hero-1-circle-4.png') }}"
                                    alt="">
                            </div>
                            <div class="hero__thumb-big mr-30">
                                @if ($hero && $hero->gambar1)
                                    <img src="{{ asset('storage/' . $hero->gambar1) }}" alt="Hero Image 1">
                                @else
                                    <img src="{{ asset('assets/img/hero/1.jpg') }}" alt="Default Hero Image">
                                @endif
                                <div class="hero__quote hero__quote-animation">
                                    <span>{{ $hero->penulis_kutipan ?? 'Les Brown' }}</span>
                                    <h4>"{{ $hero->kutipan ?? 'Tidak ada yang bisa terus-menerus menghinamu atau menyakiti perasaanmu tanpa izinmu.' }}"
                                    </h4>
                                </div>
                            </div>
                            <div class="hero__thumb-sm mt-50 d-none d-lg-block">
                                @if ($hero && $hero->gambar2)
                                    <img src="{{ asset('storage/' . $hero->gambar2) }}" alt="Hero Image 2">
                                @else
                                    <img src="{{ asset('assets/img/hero/2.jpg') }}" alt="Default Hero Image 2">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end -->
    <section class="teacher__area pt-100 pb-110">
        <div class="page__title-shape">
            <img class="page-title-shape-5 d-none d-sm-block"
                src="{{ asset('assets/img/page-title/page-title-shape-1.png') }}" alt="">
            <img class="page-title-shape-6" src="{{ asset('assets/img/page-title/page-title-shape-6.png') }}"
                alt="">
            <img class="page-title-shape-3" src="{{ asset('assets/img/page-title/page-title-shape-3.png') }}"
                alt="">
            <img class="page-title-shape-7" src="{{ asset('assets/img/page-title/page-title-shape-4.png') }}"
                alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <div class="teacher__details-thumb p-relative w-img pr-30">
                        @if ($koordinator && $koordinator->foto)
                            <img src="{{ asset('storage/' . $koordinator->foto) }}"
                                alt="{{ $koordinator->nama ?? 'Koordinator BK' }}">
                        @else
                            <img src="{{ asset('assets/img/teacher/koor_bk.jpg') }}" alt="Koordinator BK">
                        @endif
                        <div class="teacher__details-shape">
                            <img class="teacher-details-shape-1"
                                src="{{ asset('assets/img/teacher/details/shape/shape-1.png') }}" alt="">
                            <img class="teacher-details-shape-2"
                                src="{{ asset('assets/img/teacher/details/shape/shape-2.png') }}" alt="">
                        </div>
                    </div>
                    @if ($koordinator)
                        <div class="teacher__name text-center mt-3">
                            <h4>
                                <span class="yellow-shape">{{ $koordinator->nama }}<img
                                        src="{{ asset('assets/img/shape/yellow-bg.png') }}" alt="yellow-shape"> </span>
                            </h4>
                        </div>
                    @endif
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="teacher__bio" style="text-align: justify;">
                        <h3>Assalamu'alaikum Wr. Wb.</h3>

                        @if ($koordinator && $koordinator->sambutan)
                            {!! $koordinator->sambutan !!}
                        @else
                            <p>
                                <strong>
                                    Tidak Ada Data
                                </strong>
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instructor details area end -->
    <section class="why__area pt-125">
        <div class="row">
            <div class="col-xxl-4 offset-xxl-4">
                <div class="section__title-wrapper mb-60 text-center">
                    <h2 class="section__title">Visi, Misi dan Tujuan</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-5 offset-xxl-1 col-xl-5 offset-xl-1 col-lg-6 col-md-8">
                    <div class="why__content pr-50 mt-40">
                        <div class="section__title-wrapper mb-30">
                            <h2 class="section__title"><span class="yellow-bg yellow-bg-big">Visi<img
                                        src="{{ asset('assets/img/shape/yellow-bg.png') }}" alt=""></span></h2>
                            <div class="about__list mb-35">
                                @if ($visi)
                                    <p>{{ $visi->isi }}</p>
                                @else
                                    <strong>Tidak Ada</strong>
                                @endif
                            </div>

                        </div>

                        <div class="section__title-wrapper mb-30">
                            <h2 class="section__title"><span class="yellow-bg yellow-bg-big">Misi<img
                                        src="{{ asset('assets/img/shape/yellow-bg.png') }}" alt=""></span></h2>
                            <div class="about__list mb-35">
                                <ul>
                                    @forelse($misi as $item)
                                        <li class="d-flex align-items-center"> <i class="icon_check"></i>
                                            {{ $item->isi }}</li>
                                    @empty
                                        <strong>Tidak Ada Data</strong>
                                    @endforelse
                                </ul>
                            </div>
                        </div>

                        <div class="section__title-wrapper mb-30">
                            <h2 class="section__title"><span class="yellow-bg yellow-bg-big">Tujuan<img
                                        src="{{ asset('assets/img/shape/yellow-bg.png') }}" alt=""></span></h2>
                            <div class="about__list mb-35">
                                <ul>
                                    @forelse($tujuan as $item)
                                        <li class="d-flex align-items-center"> <i class="icon_check"></i>
                                            {{ $item->isi }}</li>
                                    @empty
                                        <strong>Tidak Ada Data</strong>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-8">
                    <div class="why__thumb">
                        @if ($visi && $visi->foto)
                            <img src="{{ asset('storage/' . $visi->foto) }}" alt="Foto Visi" class="img-fluid rounded">
                        @else
                            <img src="{{ asset('assets/img/why/why-2.png') }}" alt="Default Visi"
                                class="img-fluid rounded">
                        @endif
                        <img class="why-green" src="{{ asset('assets/img/why/why-shape-green.png') }}" alt="">
                        <img class="why-pink" src="{{ asset('assets/img/why/why-shape-pink.png') }}" alt="">
                        <img class="why-dot" src="{{ asset('assets/img/why/why-shape-dot.png') }}" alt="">
                        <img class="why-line" src="{{ asset('assets/img/why/why-shape-line.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category area start -->
    <section class="category__area pt-120 pb-70">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8">
                    <div class="section__title-wrapper mb-45">
                        <h2 class="section__title">Jelajahi <br>Layanan <span class="yellow-bg">Konseling <img
                                    src="{{ asset('assets/img/shape/yellow-bg-2.png') }}" alt=""> </span>Online
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($layanan as $item)
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="category__item mb-30 transition-3 d-flex align-items-center">
                            <div class="category__icon mr-30">
                                <div class="category__avatar">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->nama_layanan }}"
                                        class="rounded-circle"
                                        onerror="this.src='{{ asset('assets/img/default-service.jpg') }}'">
                                </div>
                            </div>
                            <div class="category__content">
                                <h4 class="category__title">
                                    <a href="{{ route('layanan', $item->id) }}">{{ $item->nama_layanan }}</a>
                                </h4>
                                <p>{{ $item->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- category area end -->

    <!-- course area start -->
    <section class="course__area pt-115 pb-120 grey-bg">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xxl-5 col-xl-6 col-lg-6">
                    <div class="section__title-wrapper mb-60">
                        <h2 class="section__title">Temukan Bantuan<br>Bimbingan <span
                                class="yellow-bg yellow-bg-big">Konseling<img
                                    src="{{ asset('assets/img/shape/yellow-bg.png') }}" alt=""></span> yang Tepat
                        </h2>
                        <p>Call In BK hadir untuk membantumu menemukan solusi dan dukungan dalam perjalanan pendidikanmu.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row grid">
                @forelse($daftarGuru as $guru)
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat1 cat2 cat4">
                        <div class="course__item white-bg mb-30 fix">
                            <div class="course__thumb w-img p-relative fix">
                                <a href="#">
                                    @if ($guru && $guru->foto)
                                        <img src="{{ asset('storage/' . $guru->foto) }}" alt="{{ $guru->nama }}">
                                    @else
                                        <img src="{{ asset('assets/img/course/course-1.jpg') }}"
                                            alt="Default Guru Image">
                                    @endif
                                </a>
                                <div class="course__tag">
                                    <a href="#">{{ $guru->jabatan ?? 'Guru BK' }}</a>
                                </div>
                            </div>
                            <div class="course__content">
                                <div class="course__meta d-flex align-items-center justify-content-between">
                                    <div class="course__lesson">
                                        <span><i class="far fa-book-alt"></i>{{ $guru->nip ?: 'NIP belum diisi' }}</span>
                                    </div>
                                </div>
                                <h3 class="course__title">
                                    <a href="#">{{ $guru->bio_singkat ?: 'Bio singkat belum tersedia' }}</a>
                                </h3>
                                <div class="course__teacher d-flex align-items-center">
                                    <div class="course__teacher-thumb mr-15">
                                        @if ($guru && $guru->avatar)
                                            <img src="{{ asset('storage/' . $guru->avatar) }}"
                                                alt="{{ $guru->nama }}">
                                        @else
                                            <img src="{{ asset('assets/img/course/teacher/teacher-1.jpg') }}"
                                                alt="Default Avatar">
                                        @endif
                                    </div>
                                    <h6><a href="#">{{ $guru->nama }}</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info text-center">
                            Data guru BK belum tersedia.
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- course area end -->


    <section class="contact__area pt-115 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xxl-7 col-xl-7 col-lg-6">
                    <div class="contact__wrapper">
                        <div class="section__title-wrapper mb-40">
                            <h2 class="section__title"><span class="yellow-bg yellow-bg-big">Kontak<img
                                        src="{{ asset('assets/img/shape/yellow-bg.png') }}" alt=""></span></h2>
                            <p>Mari lebih dekat bersama kami</p>
                        </div>
                        <div class="contact__form">
                            <form action="{{ route('pesan') }}" method="POST" id="contactForm">
                                @csrf
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-md-6">
                                        <div class="contact__form-input">
                                            <input type="text" placeholder="Nama" name="name" required
                                                value="{{ old('name') }}">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-md-6">
                                        <div class="contact__form-input">
                                            <input type="email" placeholder="Email" name="email" required
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="contact__form-input">
                                            <input type="text" placeholder="Judul/Subject Pesan" name="subject"
                                                required value="{{ old('subject') }}">
                                            @error('subject')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="contact__form-input">
                                            <textarea placeholder="Masukkan pesan anda" name="message" required>{{ old('message') }}</textarea>
                                            @error('message')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="contact__btn">
                                            <button type="submit" class="e-btn">Kirim Pesan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 offset-xxl-1 col-xl-4 offset-xl-1 col-lg-5 offset-lg-1">
                    <div class="contact__info white-bg p-relative z-index-1">
                        <div class="contact__shape">
                            <img class="contact-shape-1" src="{{ asset('assets/img/contact/contact-shape-1.png') }}"
                                alt="">
                            <img class="contact-shape-2" src="{{ asset('assets/img/contact/contact-shape-2.png') }}"
                                alt="">
                            <img class="contact-shape-3" src="{{ asset('assets/img/contact/contact-shape-3.png') }}"
                                alt="">
                        </div>
                        <div class="contact__info-inner white-bg">
                            <ul>
                                <li>
                                    <div class="contact__info-item d-flex align-items-start mb-35">
                                        <div class="contact__info-icon mr-15">
                                            <svg class="map" viewBox="0 0 24 24">
                                                <path class="st0"
                                                    d="M21,10c0,7-9,13-9,13s-9-6-9-13c0-5,4-9,9-9S21,5,21,10z" />
                                                <circle class="st0" cx="12" cy="10" r="3" />
                                            </svg>
                                        </div>
                                        <div class="contact__info-text">
                                            <h4>{{ $pengaturan->nama_situs ?? 'Nama Sekolah' }}</h4>
                                            <p> <a target="_blank" href="{{ $pengaturan->link_map ?? '#' }}">
                                                    {{ $pengaturan->alamat ?? 'Alamat belum diisi' }}
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact__info-item d-flex align-items-start mb-35">
                                        <div class="contact__info-icon mr-15">
                                            <svg class="mail" viewBox="0 0 24 24">
                                                <path class="st0"
                                                    d="M4,4h16c1.1,0,2,0.9,2,2v12c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2V6C2,4.9,2.9,4,4,4z" />
                                                <polyline class="st0" points="22,6 12,13 2,6 " />
                                            </svg>
                                        </div>
                                        <div class="contact__info-text">
                                            <h4>Email</h4>
                                            <a href="mailto:{{ $pengaturan->email ?? '' }}">
                                                {{ $pengaturan->email ?? 'Email belum diisi' }}
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact__info-item d-flex align-items-start mb-35">
                                        <div class="contact__info-icon mr-15">
                                            <svg class="call" viewBox="0 0 24 24">
                                                <path class="st0"
                                                    d="M22,16.9v3c0,1.1-0.9,2-2,2c-0.1,0-0.1,0-0.2,0c-3.1-0.3-6-1.4-8.6-3.1c-2.4-1.5-4.5-3.6-6-6  c-1.7-2.6-2.7-5.6-3.1-8.7C2,3.1,2.8,2.1,3.9,2C4,2,4.1,2,4.1,2h3c1,0,1.9,0.7,2,1.7c0.1,1,0.4,1.9,0.7,2.8c0.3,0.7,0.1,1.6-0.4,2.1  L8.1,9.9c1.4,2.5,3.5,4.6,6,6l1.3-1.3c0.6-0.5,1.4-0.7,2.1-0.4c0.9,0.3,1.8,0.6,2.8,0.7C21.3,15,22,15.9,22,16.9z" />
                                            </svg>
                                        </div>
                                        <div class="contact__info-text">
                                            <h4>Phone</h4>
                                            <a href="tel:{{ $pengaturan->telepon ?? '' }}">
                                                {{ $pengaturan->telepon ?? 'Telepon belum diisi' }}
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="contact__social pl-30">
                                <h4>Follow Us</h4>
                                <ul>
                                    <li><a href="{{ $pengaturan->facebook ?? '#' }}" class="fb"><i
                                                class="social_facebook"></i></a></li>
                                    <li><a href="{{ $pengaturan->instagram ?? '#' }}" class="ig"><i
                                                class="social_instagram"></i></a></li>
                                    <li><a href="{{ $pengaturan->twitter ?? '#' }}" class="tw"><i
                                                class="social_twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- cta area start -->
    <section class="cta__area mb--120">
        <div class="container">
            <div class="cta__inner blue-bg fix">
                <div class="cta__shape">
                    <img src="{{ asset('assets/img/cta/cta-shape.png') }}" alt="">
                </div>
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-8">
                        <div class="cta__content">
                            <h3 class="cta__title">Pendidikan adalah paspor untuk masa depan, karena hari esok adalah milik
                                mereka yang mempersiapkannya hari ini.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end -->
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: "{{ session('success') }}",
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                });
            @endif

            @if (session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: "{{ session('error') }}",
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'OK'
                });
            @endif
            const form = document.getElementById('contactForm');
            if (form) {
                form.addEventListener('submit', function(e) {
                    if (form.checkValidity()) {
                        Swal.fire({
                            title: 'Mengirim pesan...',
                            html: 'Mohon tunggu sebentar',
                            allowOutsideClick: false,
                            didOpen: () => {
                                Swal.showLoading();
                            }
                        });
                    }
                });
            }
        });
    </script>
@endsection
