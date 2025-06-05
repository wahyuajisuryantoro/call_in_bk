@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css">
@endsection

@section('content')
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
                            <form action="{{ route('pesan') }}" method="POST" id="contactForm">
                                @csrf
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-md-6">
                                        <div class="contact__form-input">
                                            <input type="text" placeholder="Nama" name="name" required value="{{ old('name') }}">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-md-6">
                                        <div class="contact__form-input">
                                            <input type="email" placeholder="Email" name="email" required value="{{ old('email') }}">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="contact__form-input">
                                            <input type="text" placeholder="Judul/Subject Pesan" name="subject" required value="{{ old('subject') }}">
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
                                            <h4>No Telp</h4>
                                            <a href="#" class="whatsapp-link" onclick="openWhatsApp('{{ $pengaturan->telepon }}')">
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
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>

<script>
    function openWhatsApp(phoneNumber) {
        let cleanNumber = phoneNumber.replace(/[^0-9]/g, '');
        if (cleanNumber.startsWith('0')) {
            cleanNumber = '62' + cleanNumber.substring(1);
        }
        if (!cleanNumber.startsWith('62')) {
            cleanNumber = '62' + cleanNumber;
        }
        const defaultMessage = 'Halo, saya ingin bertanya.';
        const encodedMessage = encodeURIComponent(defaultMessage);
        const whatsappUrl = `https://wa.me/${cleanNumber}?text=${encodedMessage}`;
        window.open(whatsappUrl, '_blank');
    }
    document.addEventListener('DOMContentLoaded', function() {
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        @endif

        @if(session('error'))
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