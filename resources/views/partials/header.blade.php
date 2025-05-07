<!-- header area start -->
<header>
    <div id="header-sticky" class="header__area header__transparent header__padding">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
                    <div class="header__left d-flex">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ asset('assets/img/logo.jpg') }}" alt="logo">
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
                    <div class="header__right d-flex justify-content-end align-items-center">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('landing') }}">Beranda</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">Tentang Kami</a>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="#">Galeri</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('foto') }}">Foto</a></li>
                                            <li><a href="blog-details.html">Video</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="header__btn ml-20 d-none d-sm-block">
                            <a href="contact.html" class="e-btn">Try for free</a>
                        </div>
                        <div class="sidebar__menu d-xl-none">
                            <div class="sidebar-toggle-btn ml-30" id="sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
