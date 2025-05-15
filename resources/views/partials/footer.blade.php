   <!-- footer area start -->
   <footer>
       <div class="footer__area footer-bg">
           <div class="footer__top pt-190 pb-40">
               <div class="container">
                   <div class="row">
                       <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                           <div class="footer__widget mb-50">
                               <div class="footer__widget-head mb-22">
                                   <div class="footer__logo">
                                       <a href="{{ route('landing') }}">
                                           <img src="{{ asset('storage/' . $pengaturan->logo) }}" alt="Logo"
                                               style="width:80px; height:80px; object-fit:cover; border-radius:8px;">
                                       </a>
                                   </div>
                               </div>
                               <div class="footer__widget-body">


                                   <div class="footer__social">
                                    <p>{{ $pengaturan->deskripsi}}</p>
                                       <ul>
                                           <li><a href="{{ $pengaturan->facebook }}"><i class="social_facebook"></i></a></li>
                                           <li><a href="{{ $pengaturan->twitter }}" class="tw"><i class="social_twitter"></i></a>
                                           </li>
                                           <li><a href="{{ $pengaturan->instagram }}" class="pin"><i class="social_instagram"></i></a>
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div
                           class="col-xxl-2 offset-xxl-1 col-xl-2 offset-xl-1 col-lg-3 offset-lg-0 col-md-2 offset-md-1 col-sm-5 offset-sm-1">
                           <div class="footer__widget mb-50">
                               <div class="footer__widget-head mb-22">
                                   <h3 class="footer__widget-title">Link Cepat</h3>
                               </div>
                               <div class="footer__widget-body">
                                   <div class="footer__link">
                                       <ul>
                                           <li><a href="{{ route('landing') }}">Beranda</a></li>
                                           <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                                           <li><a href="{{ route('foto') }}">Galeri Foto</a></li>
                                           <li><a href="#">Galeri Video</a></li>
                                           <li><a href="#">Kontak</a></li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-6">
                           <div class="footer__widget footer__pl-70 mb-50">
                               <div class="footer__widget-head mb-22">
                                   <h3 class="footer__widget-title">Lokasi Kami</h3>
                               </div>
                               <div class="footer__widget-body">
                                   <div class="footer__subscribe">
                                       {{-- Map Footer --}}
                                       <div class="footer__map mb-3" style="width:100%; height:200px;">
                                        <iframe
                                            src="{{ $pengaturan->map }}"
                                            width="100%"
                                            height="100%"
                                            style="border:0;"
                                            allowfullscreen=""
                                            loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    </div>
                                       <p>{{ $pengaturan->alamat }}</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="footer__bottom">
               <div class="container">
                   <div class="row">
                       <div class="col-xxl-12">
                           <div class="footer__copyright text-center">
                            <p>
                                © {{ date('Y') }} {{ $pengaturan->nama_situs ?? 'Nama Situs' }}, All Rights Reserved. Design By <strong>{{ $pengaturan->nama_situs }}</strong>
                            </p>
                        </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </footer>
   <!-- footer area end -->
