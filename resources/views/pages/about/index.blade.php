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
                            <img src="{{asset('assets/img/foto/galeri2.jpg')}}" alt="">
                        </div>
                        <div class="about__banner mt--210">
                            <img src="{{asset('assets/img/foto/galeri1.jpg')}}" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="about__content pl-70 pr-60 pt-25">
                        <div class="section__title-wrapper mb-25">
                            <h2 class="section__title">Temukan <br><span class="yellow-bg-big">Ruang Aman <img
                                        src="assets/img/shape/yellow-bg-2.png" alt=""></span> untuk Curhat dan
                                Konsultasi</h2>
                            <p><strong>Call In BK</strong> adalah layanan Bimbingan Konseling online yang diciptakan sebagai
                                ruang nyaman bagi para siswa untuk mencurahkan isi hati, berbagi keresahan, dan mencari
                                pencerahan tanpa rasa takut akan penilaian.</p>
                            <p>Dalam perjalanan sebagai pelajar, tak jarang kita menghadapi tekanan, kebingungan, atau
                                bahkan rasa lelah yang tak terucapkan. Tidak semua hal bisa dibicarakan di ruang kelas,
                                tidak semua rasa bisa disampaikan kepada teman atau keluarga. Karena itu, <strong>Call In
                                    BK</strong> hadir sebagai teman seperjalanan yang siap mendengarkan dan membantu kamu
                                menemukan titik terang dari setiap masalah yang kamu alami.</p>
                            <p>Kami percaya bahwa setiap siswa memiliki potensi hebat di dalam dirinya. Namun, potensi itu
                                hanya bisa tumbuh jika mental dan emosinya terjaga dengan baik. Melalui layanan ini, kamu
                                tidak hanya didengarkan, tetapi juga dipandu untuk mengenali dirimu lebih dalam, membangun
                                ketangguhan mental, dan meraih tujuan hidupmu dengan semangat baru.</p>
                            <p><strong>Call In BK</strong> bukan sekadar konsultasi — ini adalah bentuk kepedulian, pelukan
                                hangat dalam bentuk digital, dan pengingat bahwa kamu tidak sendiri. Jangan ragu untuk
                                berbicara. Jangan takut untuk meminta bantuan. Karena terkadang, langkah pertama menuju
                                pemulihan adalah keberanian untuk berkata, “Aku butuh teman.”</p>
                        </div>

                        <div class="about__list mb-35">
                            <ul>
                                <li class="d-flex align-items-center"> <i class="icon_check"></i> Konsultasi online dengan
                                    guru BK secara pribadi dan rahasia.</li>
                                <li class="d-flex align-items-center"> <i class="icon_check"></i> Wadah aman untuk
                                    menyalurkan emosi dan kebingungan siswa.</li>
                                <li class="d-flex align-items-center"> <i class="icon_check"></i> Tersedia setiap saat untuk
                                    mendengarkan keluh kesahmu.</li>
                            </ul>
                        </div>
                        <a href="contact.html" class="e-btn e-btn-border">Hubungi Sekarang</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
