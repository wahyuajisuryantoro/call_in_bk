@extends('layouts.app')
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
                                <span class="yellow-shape">Call In BK<img src="assets/img/shape/yellow-bg.png"
                                        alt="yellow-shape"> </span>
                            </h3>
                            <p>{{ $hero->subjudul ?? 'Sampaikan keluhan dan masalah, jalan keluar pasti lebih terarah' }}
                            </p>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="hero__thumb d-flex p-relative">
                            <div class="hero__thumb-shape">
                                <img class="hero-1-dot" src="assets/img/shape/hero/hero-1-dot.png" alt="">
                                <img class="hero-1-circle-3" src="assets/img/shape/hero/hero-1-circle-3.png" alt="">
                                <img class="hero-1-circle-4" src="assets/img/shape/hero/hero-1-circle-4.png" alt="">
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
            <img class="page-title-shape-5 d-none d-sm-block" src="assets/img/page-title/page-title-shape-1.png"
                alt="">
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
                        @if($koordinator && $koordinator->foto)
                            <img src="{{ asset('storage/' . $koordinator->foto) }}" alt="{{ $koordinator->nama ?? 'Koordinator BK' }}">
                        @else
                            <img src="{{ asset('assets/img/teacher/koor_bk.jpg') }}" alt="Koordinator BK">
                        @endif
                        <div class="teacher__details-shape">
                            <img class="teacher-details-shape-1" src="assets/img/teacher/details/shape/shape-1.png"
                                alt="">
                            <img class="teacher-details-shape-2" src="assets/img/teacher/details/shape/shape-2.png"
                                alt="">
                        </div>
                    </div>
                    @if($koordinator)
                    <div class="teacher__name text-center mt-3">
                        <h4>
                            <span class="yellow-shape">{{ $koordinator->nama }}<img src="assets/img/shape/yellow-bg.png" alt="yellow-shape"> </span>
                        </h4>
                    </div>
                    @endif
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="teacher__bio" style="text-align: justify;">
                        <h3>Assalamu'alaikum Wr. Wb.</h3>
                        
                        @if($koordinator && $koordinator->sambutan)
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
                                <p>
                                    Menjadi wadah yang aman dan nyaman bagi siswa dan orang tua/wali untuk berbagi, mencari
                                    solusi, dan tumbuh bersama dalam menghadapi tantangan pendidikan dan kehidupan.
                                </p>
                            </div>
                        </div>
                        <div class="section__title-wrapper mb-30">
                            <h2 class="section__title"><span class="yellow-bg yellow-bg-big">Misi<img
                                        src="{{ asset('assets/img/shape/yellow-bg.png') }}" alt=""></span></h2>
                            <div class="about__list mb-35">
                                <ul>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Menyediakan layanan
                                        bimbingan dan konseling online yang mudah diakses dan profesional.
                                    </li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Membantu siswa dan
                                        orang tua/wali mengatasi masalah dan tantangan yang dihadapi dalam proses
                                        pendidikan.
                                    </li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Membangun hubungan
                                        yang positif dan suportif antara siswa, orang tua/wali, dan guru.
                                    </li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Menyediakan
                                        informasi
                                        dan sumber daya yang bermanfaat untuk mendukung perkembangan siswa.
                                    </li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Menjadi tempat yang
                                        aman dan nyaman untuk berbagi dan mencari solusi.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="section__title-wrapper mb-30">
                            <h2 class="section__title"><span class="yellow-bg yellow-bg-big">Tujuan<img
                                        src="{{ asset('assets/img/shape/yellow-bg.png') }}" alt=""></span></h2>
                            <div class="about__list mb-35">
                                <ul>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Mengatasi masalah
                                        akademik dan non-akademik

                                    </li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i>Meningkatkan
                                        kesadaran diri dan kemampuan mengelola emosi

                                    </li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Membangun hubungan
                                        yang positif dengan guru dan teman

                                    </li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Mengembangkan
                                        keterampilan hidup yang positif

                                    </li>
                                    <li class="d-flex align-items-center"> <i class="icon_check"></i> Meningkatkan
                                        prestasi akademik dan non-akademik

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-8">
                    <div class="why__thumb">
                        <img src="assets/img/why/why.png" alt="">
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
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="category__item mb-30 transition-3 d-flex align-items-center">
                        <div class="category__icon mr-30">
                            <svg viewBox="0 0 512 512">
                                <g>
                                    <path class="st0"
                                        d="M91.5,96c0-23.1,12.7-43.2,31.5-53.7c-8.9-5-19.1-7.8-30-7.8C59,34.5,31.5,62,31.5,96S59,157.5,93,157.5   c10.9,0,21.1-2.8,30-7.8C104.2,139.2,91.5,119.1,91.5,96z" />
                                    <path class="st1"
                                        d="M158,226v178.6c0,22.6-6.6,44.5-19.2,63.3c-0.1,0.1-0.1,0.1-0.2,0.2l-24.2,35.2c-3.7,5.4-9.9,8.7-16.5,8.7   s-12.8-3.2-16.5-8.7l-24.2-35.2c-0.1-0.1-0.1-0.1-0.2-0.2c-12.4-18.9-19-40.7-19-63.3V229c0-11,9-20,20-20s20,9,20,20v175.6   c0,14.6,4.3,28.8,12.4,41l7.6,11.1l7.6-11.1c8.1-12.2,12.4-26.4,12.4-41V226c0-11,9-20,20-20S158,215,158,226L158,226z M503.3,81.5   l-35.2-24.2c-0.1-0.1-0.1-0.1-0.2-0.2C449,44.6,427.2,38,404.6,38H229c-11,0-20,9-20,20s9,20,20,20h175.6c14.6,0,28.8,4.3,41,12.4   l11.1,7.6l-11.1,7.6c-12.2,8.1-26.4,12.4-41,12.4H225c-11,0-20,9-20,20s9,20,20,20h179.6c22.6,0,44.5-6.6,63.3-19.2   c0.1-0.1,0.1-0.1,0.2-0.2l35.2-24.2c5.4-3.7,8.7-9.9,8.7-16.5S508.8,85.2,503.3,81.5z M176,94.5c0,44.9-36.6,81.5-81.5,81.5   S13,139.4,13,94.5c0-15.2,4.2-29.5,11.5-41.7L5.9,34.1C-2,26.3-2,13.7,5.9,5.9s20.5-7.8,28.3,0l18.7,18.7C65,17.2,79.3,13,94.5,13   C139.4,13,176,49.6,176,94.5z M136,94.5C136,71.6,117.4,53,94.5,53S53,71.6,53,94.5S71.6,136,94.5,136S136,117.4,136,94.5z" />
                                    <path class="st2"
                                        d="M198,512c-11,0-20-9-20-20s9-20,20-20c151.1,0,274-122.9,274-274c0-11,9-20,20-20s20,9,20,20   c0,83.9-32.7,162.7-92,222S281.9,512,198,512z" />
                                </g>
                            </svg>
                        </div>
                        <div class="category__content">
                            <h4 class="category__title"><a href="course-details.html">Materi BK</a></h4>
                            <p>Pengetahuan dan Pengembangan</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="category__item mb-30 transition-3 d-flex align-items-center">
                        <div class="category__icon mr-30">
                            <svg viewBox="0 0 512 512">
                                <g>
                                    <path class="st0"
                                        d="M81,392V120c0-55.2,44.8-100,100-100h-61C64.8,20,20,64.8,20,120v272c0,55.2,44.8,100,100,100h61   C125.8,492,81,447.2,81,392z" />
                                    <path class="st1"
                                        d="M392,512H120C53.8,512,0,458.2,0,392V120C0,53.8,53.8,0,120,0h208c11,0,20,9,20,20s-9,20-20,20H120   c-44.1,0-80,35.9-80,80v272c0,44.1,35.9,80,80,80h272c44.1,0,80-35.9,80-80V207c0-11,9-20,20-20s20,9,20,20v185   C512,458.2,458.2,512,392,512z M385.3,236.8l112.1-134c0,0,0-0.1,0.1-0.1c22.1-26.7,18.4-66.3-8.3-88.4s-66.3-18.4-88.4,8.3   l-0.1,0.1L290.5,158.4c-7,8.6-5.7,21.2,2.9,28.1c8.6,7,21.2,5.7,28.1-2.9L431.7,48.2c8-9.6,22.4-10.9,32-2.9c9.7,8,11,22.4,3,32   l-112,133.9c-7.1,8.5-6,21.1,2.5,28.2c3.7,3.1,8.3,4.7,12.8,4.7C375.7,244,381.4,241.6,385.3,236.8L385.3,236.8z" />
                                    <path class="st2"
                                        d="M169.5,433c-20.6,0-40.5-11.2-50.7-28.5c-8.7-14.8-9-31.6-0.9-46.3c10-18.1,15.8-34.9,21.3-51.1   c9.4-27.7,18.4-53.8,45.3-76.2c19.6-16.3,44.3-23.9,69.5-21.5c25.3,2.4,48.2,14.6,64.3,34.4c14,17.1,21.7,38.8,21.7,61.1   c0,39.4-23.7,74.5-66.7,99C242.2,421.6,201.4,433,169.5,433L169.5,433z M244.9,249c-12.7,0-24.9,4.4-34.9,12.7   c-18.3,15.2-24.5,33.3-33,58.4c-5.8,17-12.4,36.4-24.2,57.6c-0.6,1.1-1.7,3.1,0.4,6.6c2.6,4.4,9,8.8,16.3,8.8   C213.8,393.1,300,362,300,305c0-13.3-4.4-25.6-12.6-35.7c-9.4-11.4-22.6-18.5-37.2-19.9C248.4,249.1,246.6,249,244.9,249L244.9,249   z" />
                                </g>
                            </svg>
                        </div>
                        <div class="category__content">
                            <h4 class="category__title"><a href="course-details.html">Pengembangan Diri</a></h4>
                            <p>Peningkatan bidang akademik / non akademik</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="category__item mb-30 transition-3 d-flex align-items-center">
                        <div class="category__icon mr-30">
                            <svg viewBox="0 0 512 512">
                                <g>
                                    <path class="st0"
                                        d="M106.1,341.9V120c0-55.2,44.8-100,100-100h-61c-55.2,0-100,44.8-100,100v221.9c0,55.2,44.8,100,100,100h61   C150.8,441.8,106.1,397.1,106.1,341.9z" />
                                    <path class="st1"
                                        d="M442.8,512c-10.5,0-20.9-3.9-29.2-11.3l-49.9-43.9c-8.3-7.3-9.1-19.9-1.8-28.2c7.3-8.3,19.9-9.1,28.2-1.8   l49.9,43.9c0.1,0,0.1,0.1,0.2,0.1c0.5,0.4,1.9,1.7,4.3,0.7c2.4-1.1,2.4-3,2.4-3.7V120c0-44.1-35.9-80-80-80H145   c-44.1,0-80,35.9-80,80v221.9c0,44.1,35.9,80,80,80h154c11,0,20,9,20,20s-9,20-20,20H145c-66.1,0-120-53.8-120-120V120   C25.1,53.8,78.9,0,145,0h222c66.1,0,120,53.8,120,120v348c0,17.6-10,33-26.1,40.2C455,510.7,448.8,512,442.8,512L442.8,512z    M350.7,264c-9.3-5.9-21.7-3.2-27.6,6.1c-0.2,0.4-25.1,38.7-67.1,38.7s-67.9-38.3-68.1-38.7c-5.9-9.3-18.3-12.1-27.6-6.1   c-9.3,5.9-12.1,18.3-6.1,27.6c1.5,2.3,38.2,57.2,101.8,57.2s99.3-54.9,100.8-57.2C362.8,282.3,360,270,350.7,264z" />
                                    <path class="st2"
                                        d="M334,211.9c-11,0-20-9-20-20v-55c0-11,9-20,20-20s20,9,20,20v55C354,203,345,211.9,334,211.9z M199,191.9v-55   c0-11-9-20-20-20s-20,9-20,20v55c0,11,9,20,20,20S199,203,199,191.9z" />
                                </g>
                            </svg>
                        </div>
                        <div class="category__content">
                            <h4 class="category__title"><a href="course-details.html">Konseling Online</a></h4>
                            <p>Dukung konseling Online melalu website</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="category__item mb-30 transition-3 d-flex align-items-center">
                        <div class="category__icon mr-30">
                            <svg viewBox="0 0 512 512">
                                <g>
                                    <path class="st0"
                                        d="M81.5,276c0-92.5,58.2-171.5,140-202.2c-9.2-7.6-21.6-11.2-34.4-8.2C91.4,87.7,20,173.5,20,276   c0,119.6,96.3,216,216,216c10.4,0,20.7-0.8,30.7-2.2C161.7,475,81.5,385.2,81.5,276z" />
                                    <path class="st1"
                                        d="M236,512c-63.2,0-122.5-24.5-167-69S0,339.2,0,276c0-53.6,18.5-106.2,52.1-147.9c33.1-41.1,79.4-70.2,130.5-82   c17.9-4.1,36.3,0,50.7,11.5s22.7,28.6,22.7,47V236c0,11,9,20,20,20h131.4c18.4,0,35.6,8.3,47,22.7c11.4,14.4,15.6,32.9,11.5,50.7   c-11.8,51.1-41,97.4-82,130.5C342.1,493.5,289.6,512,236,512L236,512z M196.1,84.6c-1.5,0-3,0.2-4.5,0.5   C102.3,105.7,40,184.2,40,276c0,52.5,20.3,101.8,57.3,138.7c36.9,37,86.2,57.3,138.7,57.3c91.8,0,170.3-62.3,190.9-151.6   c1.4-5.9,0-12-3.8-16.8s-9.6-7.6-15.7-7.6H276c-33.1,0-60-26.9-60-60V104.6c0-6.1-2.8-11.9-7.6-15.7   C204.8,86,200.5,84.6,196.1,84.6L196.1,84.6z M187.1,65.6L187.1,65.6L187.1,65.6z" />
                                    <path class="st2"
                                        d="M450.6,216h-93.2c-33.9,0-61.4-27.6-61.4-61.4V61.4c0-19.7,9.1-37.7,24.9-49.4c15.9-11.7,35.9-15,54.9-9.2   c31.3,9.7,60.1,27,83.2,50.2c23.2,23.2,40.5,51.9,50.2,83.2c5.9,18.9,2.5,38.9-9.3,54.8C488.3,206.9,470.3,216,450.6,216L450.6,216   z M357.4,40c-4.5,0-9,1.4-12.8,4.2c-5.5,4.1-8.7,10.3-8.7,17.2v93.2c0,11.8,9.6,21.4,21.4,21.4h93.2c6.9,0,13.1-3.2,17.2-8.7   c4.1-5.6,5.3-12.6,3.2-19.3c-7.8-25.1-21.7-48.2-40.3-66.8C412.1,62.7,389,48.8,363.9,41C361.8,40.4,359.6,40,357.4,40z" />
                                </g>
                            </svg>
                        </div>
                        <div class="category__content">
                            <h4 class="category__title"><a href="course-details.html">Pembuatan Keputusan</a></h4>
                            <p>Membantu siswa mengidentifikasi masalah</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="category__item mb-30 transition-3 d-flex align-items-center">
                        <div class="category__icon mr-30">
                            <svg viewBox="0 0 512 512">
                                <g>
                                    <path class="st4"
                                        d="M438,512c-40.8,0-74-33.2-74-74V74c0-40.8,33.2-74,74-74s74,33.2,74,74v364C512,478.8,478.8,512,438,512z    M438,40c-18.7,0-34,15.3-34,34v364c0,18.7,15.3,34,34,34s34-15.3,34-34V74C472,55.3,456.7,40,438,40z M74,512   c-40.8,0-74-33.2-74-74v-82c0-40.8,33.2-74,74-74s74,33.2,74,74v82C148,478.8,114.8,512,74,512z M74,322c-18.7,0-34,15.3-34,34v82   c0,18.7,15.3,34,34,34s34-15.3,34-34v-82C108,337.3,92.7,322,74,322z M256,512c-40.8,0-74-33.2-74-74V213c0-40.8,33.2-74,74-74   s74,33.2,74,74v225C330,478.8,296.8,512,256,512z M256,179c-18.7,0-34,15.3-34,34v225c0,18.7,15.3,34,34,34s34-15.3,34-34V213   C290,194.3,274.7,179,256,179z" />
                                    <path class="st5"
                                        d="M139,162.3c0-31.2-27.8-56.7-61.9-56.7c-14.5,0-25.1-7-25.1-16.7c0-9.2,7.4-16.7,16.5-16.7   c9.2,0,21.1,1,40.2,8.4c10.3,4,21.9-1.1,25.9-11.4s-1.1-21.9-11.4-25.9c-9.9-3.9-18.6-6.4-26.2-8.1V20C97,9,88,0,77,0S57,9,57,20   v13.5C31.3,38.9,12,61.7,12,89c0,32.3,28,56.7,65.1,56.7c11.9,0,21.9,7.6,21.9,16.7c0,8.9-8.3,16.7-17.7,16.7   c-7.3,0-25.8-2.7-43.9-9.9c-10.3-4.1-21.9,0.9-26,11.2s0.9,21.9,11.2,26c11.6,4.6,23.7,7.9,34.4,10V228c0,11,9,20,20,20s20-9,20-20   v-11.2c9.1-2.6,17.6-7.4,24.6-14.2C132.8,191.9,139,177.6,139,162.3L139,162.3z" />
                                </g>
                            </svg>
                        </div>
                        <div class="category__content">
                            <h4 class="category__title"><a href="course-details.html">Pencapaian Potensi</a></h4>
                            <p>Membantu individu meraih potensi optimal </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="category__item mb-30 transition-3 d-flex align-items-center">
                        <div class="category__icon mr-30">
                            <svg viewBox="0 0 512 512">
                                <g>
                                    <path class="st0"
                                        d="M111.3,491.6C60.1,487.1,20,444.2,20,392V223.7c0-31.2,14.6-60.6,39.4-79.5l136-103.7   c35.8-27.3,85.5-27.3,121.3,0l9.2,7c-24.6-2.4-49.8,4.2-70.5,20L93.6,190.8C85,197.4,80,207.5,80,218.3V419   C80,447.6,92,473.4,111.3,491.6L111.3,491.6z" />
                                    <path class="st1"
                                        d="M392,512H120C53.8,512,0,458.1,0,392V223.7c0-37.2,17.7-72.9,47.2-95.4l136-103.7   c42.8-32.7,102.7-32.7,145.5,0L372,57.5V32c0-11,9-20,20-20s20,9,20,20v65.9c0,7.6-4.3,14.5-11.1,17.9c-6.8,3.4-15,2.6-21-2   l-75.4-57.4c-28.6-21.8-68.5-21.8-97,0l-136,103.7c-19.7,15-31.5,38.8-31.5,63.6V392c0,44.1,35.9,80,80,80h272   c44.1,0,80-35.9,80-80V223.7c0-25.1-11.6-49-31.1-63.8c-8.8-6.7-10.5-19.2-3.8-28s19.3-10.5,28-3.8c29.3,22.4,46.9,58.1,46.9,95.6   V392C512,458.1,458.2,512,392,512z" />
                                    <path class="st2"
                                        d="M241,256c0,13.8-11.2,25-25,25s-25-11.2-25-25s11.2-25,25-25S241,242.2,241,256z M296,231   c-13.8,0-25,11.2-25,25c0,13.8,11.2,25,25,25s25-11.2,25-25C321,242.2,309.8,231,296,231z M216,311c-13.8,0-25,11.2-25,25   s11.2,25,25,25s25-11.2,25-25S229.8,311,216,311z M296,311c-13.8,0-25,11.2-25,25s11.2,25,25,25s25-11.2,25-25S309.8,311,296,311z" />
                                </g>
                            </svg>
                        </div>
                        <div class="category__content">
                            <h4 class="category__title"><a href="course-details.html">Dukungan Setiap Saat</a></h4>
                            <p>Lakukan Konseling dimanapun berada </p>
                        </div>
                    </div>
                </div>
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
                        <h2 class="section__title">Find the Right<br>Online <span
                                class="yellow-bg yellow-bg-big">Course<img src="assets/img/shape/yellow-bg.png"
                                    alt=""></span> for you</h2>
                        <p>You don't have to struggle alone, you've got our assistance and help.</p>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-6 col-lg-6">
                    <div class="course__menu d-flex justify-content-lg-end mb-60">
                        <div class="masonary-menu filter-button-group">
                            <button class="active" data-filter="*">
                                See All
                                <span class="tag">new</span>
                            </button>
                            <button data-filter=".cat1">Trending</button>
                            <button data-filter=".cat2">Popularity</button>
                            <button data-filter=".cat3">Featured</button>
                            <button data-filter=".cat4">Art & Design</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row grid">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat1 cat2 cat4">
                    <div class="course__item white-bg mb-30 fix">
                        <div class="course__thumb w-img p-relative fix">
                            <a href="course-details.html">
                                <img src="assets/img/course/course-1.jpg" alt="">
                            </a>
                            <div class="course__tag">
                                <a href="#">Art & Design</a>
                            </div>
                        </div>
                        <div class="course__content">
                            <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                    <span><i class="far fa-book-alt"></i>43 Lesson</span>
                                </div>
                                <div class="course__rating">
                                    <span><i class="icon_star"></i>4.5 (44)</span>
                                </div>
                            </div>
                            <h3 class="course__title"><a href="course-details.html">Become a product Manager learn
                                    the skills & job.</a></h3>
                            <div class="course__teacher d-flex align-items-center">
                                <div class="course__teacher-thumb mr-15">
                                    <img src="assets/img/course/teacher/teacher-1.jpg" alt="">
                                </div>
                                <h6><a href="instructor-details.html">Jim Séchen</a></h6>
                            </div>
                        </div>
                        <div class="course__more d-flex justify-content-between align-items-center">
                            <div class="course__status">
                                <span>Free</span>
                            </div>
                            <div class="course__btn">
                                <a href="course-details.html" class="link-btn">
                                    Know Details
                                    <i class="far fa-arrow-right"></i>
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat2 cat3 cat4">
                    <div class="course__item white-bg mb-30 fix">
                        <div class="course__thumb w-img p-relative fix">
                            <a href="course-details.html">
                                <img src="assets/img/course/course-2.jpg" alt="">
                            </a>
                            <div class="course__tag">
                                <a href="#" class="sky-blue">Mechanical</a>
                            </div>
                        </div>
                        <div class="course__content">
                            <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                    <span><i class="far fa-book-alt"></i>72 Lesson</span>
                                </div>
                                <div class="course__rating">
                                    <span><i class="icon_star"></i>4.5 (44)</span>
                                </div>
                            </div>
                            <h3 class="course__title"><a href="course-details.html">Fundamentals of music theory
                                    Learn new</a></h3>
                            <div class="course__teacher d-flex align-items-center">
                                <div class="course__teacher-thumb mr-15">
                                    <img src="assets/img/course/teacher/teacher-2.jpg" alt="">
                                </div>
                                <h6><a href="instructor-details.html">Barry Tone</a></h6>
                            </div>
                        </div>
                        <div class="course__more d-flex justify-content-between align-items-center">
                            <div class="course__status d-flex align-items-center">
                                <span class="sky-blue">$32.00</span>
                                <span class="old-price">$68.00</span>
                            </div>
                            <div class="course__btn">
                                <a href="course-details.html" class="link-btn">
                                    Know Details
                                    <i class="far fa-arrow-right"></i>
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat3 cat4 cat3">
                    <div class="course__item white-bg mb-30 fix">
                        <div class="course__thumb w-img p-relative fix">
                            <a href="course-details.html">
                                <img src="assets/img/course/course-3.jpg" alt="">
                            </a>
                            <div class="course__tag">
                                <a href="#" class="green">Development</a>
                            </div>
                        </div>
                        <div class="course__content">
                            <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                    <span><i class="far fa-book-alt"></i>14 Lesson</span>
                                </div>
                                <div class="course__rating">
                                    <span><i class="icon_star"></i>3.5 (55)</span>
                                </div>
                            </div>
                            <h3 class="course__title"><a href="course-details.html">Strategy law and organization
                                    Foundation</a></h3>
                            <div class="course__teacher d-flex align-items-center">
                                <div class="course__teacher-thumb mr-15">
                                    <img src="assets/img/course/teacher/teacher-3.jpg" alt="">
                                </div>
                                <h6><a href="instructor-details.html">Elon Gated</a></h6>
                            </div>
                        </div>
                        <div class="course__more d-flex justify-content-between align-items-center">
                            <div class="course__status d-flex align-items-center">
                                <span class="green">$46.00</span>
                                <span class="old-price">$68.00</span>
                            </div>
                            <div class="course__btn">
                                <a href="course-details.html" class="link-btn">
                                    Know Details
                                    <i class="far fa-arrow-right"></i>
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat4 cat1 cat3">
                    <div class="course__item white-bg mb-30 fix">
                        <div class="course__thumb w-img p-relative fix">
                            <a href="course-details.html">
                                <img src="assets/img/course/course-4.jpg" alt="">
                            </a>
                            <div class="course__tag">
                                <a href="#" class="blue">Marketing</a>
                            </div>
                        </div>
                        <div class="course__content">
                            <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                    <span><i class="far fa-book-alt"></i>22 Lesson</span>
                                </div>
                                <div class="course__rating">
                                    <span><i class="icon_star"></i>4.5 (42)</span>
                                </div>
                            </div>
                            <h3 class="course__title"><a href="course-details.html">The business Intelligence
                                    analyst Course 2022</a></h3>
                            <div class="course__teacher d-flex align-items-center">
                                <div class="course__teacher-thumb mr-15">
                                    <img src="assets/img/course/teacher/teacher-4.jpg" alt="">
                                </div>
                                <h6><a href="instructor-details.html">Eleanor Fant</a></h6>
                            </div>
                        </div>
                        <div class="course__more d-flex justify-content-between align-items-center">
                            <div class="course__status d-flex align-items-center">
                                <span class="blue">$62.00</span>
                                <span class="old-price">$97.00</span>
                            </div>
                            <div class="course__btn">
                                <a href="course-details.html" class="link-btn">
                                    Know Details
                                    <i class="far fa-arrow-right"></i>
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat1 cat2 cat4">
                    <div class="course__item white-bg mb-30 fix">
                        <div class="course__thumb w-img p-relative fix">
                            <a href="course-details.html">
                                <img src="assets/img/course/course-5.jpg" alt="">
                            </a>
                            <div class="course__tag">
                                <a href="#" class="orange">Audio & Music</a>
                            </div>
                        </div>
                        <div class="course__content">
                            <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                    <span><i class="far fa-book-alt"></i>18 Lesson</span>
                                </div>
                                <div class="course__rating">
                                    <span><i class="icon_star"></i>4.5 (37)</span>
                                </div>
                            </div>
                            <h3 class="course__title"><a href="course-details.html">Build your media and Public
                                    presence</a></h3>
                            <div class="course__teacher d-flex align-items-center">
                                <div class="course__teacher-thumb mr-15">
                                    <img src="assets/img/course/teacher/teacher-5.jpg" alt="">
                                </div>
                                <h6><a href="instructor-details.html">Pelican Steve</a></h6>
                            </div>
                        </div>
                        <div class="course__more d-flex justify-content-between align-items-center">
                            <div class="course__status d-flex align-items-center">
                                <span class="orange">$62.00</span>
                                <span class="old-price">$97.00</span>
                            </div>
                            <div class="course__btn">
                                <a href="course-details.html" class="link-btn">
                                    Know Details
                                    <i class="far fa-arrow-right"></i>
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat2 cat3">
                    <div class="course__item white-bg mb-30 fix">
                        <div class="course__thumb w-img p-relative fix">
                            <a href="course-details.html">
                                <img src="assets/img/course/course-6.jpg" alt="">
                            </a>
                            <div class="course__tag">
                                <a href="#" class="pink">UX Design</a>
                            </div>
                        </div>
                        <div class="course__content">
                            <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                    <span><i class="far fa-book-alt"></i>13 Lesson</span>
                                </div>
                                <div class="course__rating">
                                    <span><i class="icon_star"></i>4.5 (72)</span>
                                </div>
                            </div>
                            <h3 class="course__title"><a href="course-details.html">Creative writing through
                                    Storytelling</a></h3>
                            <div class="course__teacher d-flex align-items-center">
                                <div class="course__teacher-thumb mr-15">
                                    <img src="assets/img/course/teacher/teacher-6.jpg" alt="">
                                </div>
                                <h6><a href="instructor-details.html">Shahnewaz Sakil</a></h6>
                            </div>
                        </div>
                        <div class="course__more d-flex justify-content-between align-items-center">
                            <div class="course__status d-flex align-items-center">
                                <span class="pink">$46.00</span>
                                <span class="old-price">$72.00</span>
                            </div>
                            <div class="course__btn">
                                <a href="course-details.html" class="link-btn">
                                    Know Details
                                    <i class="far fa-arrow-right"></i>
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
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
                                        src="assets/img/shape/yellow-bg.png" alt=""></span></h2>
                            <p>Mari lebih dekat bersama kami</p>
                        </div>
                        <div class="contact__form">
                            <form action="assets/mail.php">
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-md-6">
                                        <div class="contact__form-input">
                                            <input type="text" placeholder="Nama" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-md-6">
                                        <div class="contact__form-input">
                                            <input type="email" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="contact__form-input">
                                            <input type="text" placeholder="Pesan" name="subject">
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="contact__form-input">
                                            <textarea placeholder="Masukkan pesan anda" name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="contact__form-agree  d-flex align-items-center mb-20">
                                            <input class="e-check-input" type="checkbox" id="e-agree">
                                            <label class="e-check-label" for="e-agree">I agree to the<a
                                                    href="#">Terms & Conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="contact__btn">
                                            <button type="submit" class="e-btn">Send your message</button>
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
                                            <h4>Magelang</h4>
                                            <p><a target="_blank"
                                                    href="https://www.google.com/maps/place/1+State+Senior+High+School+Grabag/@-7.3713293,110.3036495,17z/data=!3m1!4b1!4m6!3m5!1s0x2e7a80c093e8ccc1:0x661ad018e1321e17!8m2!3d-7.3713346!4d110.3062244!16s%2Fg%2F12353nfm?entry=ttu&g_ep=EgoyMDI1MDQyMy4wIKXMDSoASAFQAw%3D%3D">
                                                    126734, Susukan, Grabag, Kec. Grabag, Kabupaten Magelang, Jawa Tengah
                                                    56196</a></p>

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
                                            <p><a href="mailto:sman1grabag@gmail.com">sman1grabag@gmail.com</a></p>
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
                                            <p><a href="tel:(0293) 3148143">(0293) 3148143</a></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="contact__social pl-30">
                                <h4>Follow Us</h4>
                                <ul>
                                    <li><a href="https://www.facebook.com/sman1grabag" class="fb"><i
                                                class="social_facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/sman1grabag/?igshid=YmMyMTA2M2Y%3D"
                                            class="ig"><i class="social_instagram"></i></a></li>
                                    <li><a href="https://x.com/smansagra" class="tw"><i
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
