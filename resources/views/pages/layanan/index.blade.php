@extends('layouts.app')
@section('content')
   <section class="page__title-area pt-120 pb-90">
       <div class="page__title-shape">
           <img class="page-title-shape-5 d-none d-sm-block" src="{{ asset('assets/img/page-title/page-title-shape-1.png') }}" alt="">
           <img class="page-title-shape-6" src="{{ asset('assets/img/page-title/page-title-shape-6.png') }}" alt="">
           <img class="page-title-shape-7" src="{{ asset('assets/img/page-title/page-title-shape-4.png') }}" alt="">
       </div>
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="page__title-content">
                       <div class="page__title-breadcrumb">
                           <nav aria-label="breadcrumb">
                               <ol class="breadcrumb">
                                   <li class="breadcrumb-item"><a href="{{ route('landing') }}">Home</a></li>
                                   <li class="breadcrumb-item active" aria-current="page">{{ $layanan->nama_layanan }}</li>
                               </ol>
                           </nav>
                       </div>
                       <h5 class="page__title-3">{{ $layanan->nama_layanan }}</h5>
                   </div>
               </div>
           </div>
       </div>
   </section>

   <section class="course__area pt-120 pb-120">
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-xxl-10 col-xl-10 col-lg-10">
                   <div class="course__wrapper">
                       <div class="text-center mb-50">
                           <div class="course__img w-img mb-30 mx-auto">
                               <img src="{{ asset('storage/' . $layanan->image) }}" alt="{{ $layanan->nama_layanan }}" class="img-fluid rounded">
                           </div>
                           <h3>{{ $layanan->nama_layanan }}</h3>
                           <p class="lead">{{ $layanan->deskripsi }}</p>
                       </div>
                       @foreach ($isi as $item)
                           <div class="course__content-section mb-60">
                               <div class="course__description mb-30">
                                   <h4 class="mb-20">{{ $item->judul }}</h4>
                                   <div class="content-text">{!! $item->deskripsi_layanan !!}</div>
                               </div>

                               @if ($item->gambar_layanan && count($item->gambar_layanan) > 0)
                                   <div class="course__gallery mb-30">
                                       <div class="row g-3">
                                           @foreach ($item->gambar_layanan as $gambar)
                                               <div class="col-lg-6 col-md-6">
                                                   <div class="gallery__item">
                                                       <img src="{{ asset('storage/' . $gambar) }}" alt="{{ $item->judul }}" class="img-fluid rounded">
                                                   </div>
                                               </div>
                                           @endforeach
                                       </div>
                                   </div>
                               @endif

                               @if (!$loop->last)
                                   <hr class="my-50">
                               @endif
                           </div>
                       @endforeach
                       <div class="text-center mt-50">
                           <a href="{{ route('kontak') }}" class="e-btn">Hubungi Kami untuk Konsultasi</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
@endsection