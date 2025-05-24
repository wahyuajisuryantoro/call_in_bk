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
                            <span class="yellow-bg">{{ $pengaturan->nama_situs }}<img src="assets/img/shape/yellow-bg-2.png" alt=""></span><br>
                        </h2>
                        <p>Dokumentasi momen berharga selama kegiatan {{ $pengaturan->nama_situs }} berlangsung.</p>
                    </div>
                </div>                
            </div>
            <div class="row">
                @if($galeriFotos->count() > 0)
                    @foreach($galeriFotos as $galeriFoto)
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                            <div class="blog__item white-bg mb-30 transition-3 fix">
                                <div class="blog__thumb w-img fix">
                                    <a href="javascript:;" class="open-foto-modal" data-foto="{{ asset('storage/' . $galeriFoto->foto) }}" data-judul="{{ $galeriFoto->judul_foto }}" data-kreator="{{ $galeriFoto->kreator }}" data-tanggal="{{ $galeriFoto->tanggal_upload->format('d M Y') }}">
                                        <img src="{{ asset('storage/' . $galeriFoto->foto) }}" alt="{{ $galeriFoto->judul_foto }}">
                                    </a>
                                </div>
                                <div class="blog__content">
                                    <div class="blog__tag">
                                        <a href="javascript:;">{{ $galeriFoto->kreator }}</a>
                                    </div>
                                    <h3 class="blog__title">
                                        <a href="javascript:;" class="open-foto-modal" data-foto="{{ asset('storage/' . $galeriFoto->foto) }}" data-judul="{{ $galeriFoto->judul_foto }}" data-kreator="{{ $galeriFoto->kreator }}" data-tanggal="{{ $galeriFoto->tanggal_upload->format('d M Y') }}">
                                            {{ $galeriFoto->judul_foto }}
                                        </a>
                                    </h3>

                                    <div class="blog__meta d-flex align-items-center justify-content-between">
                                        <div class="blog__date d-flex align-items-center">
                                            <i class="fal fa-clock"></i>
                                            <span>{{ $galeriFoto->tanggal_upload->format('d M Y') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center">
                        <div class="alert alert-info">
                            Belum ada foto yang ditambahkan.
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- teacher area end -->

    <!-- Modal Foto -->
    <div class="modal fade" id="fotoModal" tabindex="-1" aria-labelledby="fotoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fotoModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center p-0">
                    <img src="" id="modalFoto" class="img-fluid" alt="Foto">
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div>
                            <span class="text-muted">Kreator: </span>
                            <span id="modalKreator" class="fw-bold"></span>
                        </div>
                        <div>
                            <span class="text-muted">Tanggal: </span>
                            <span id="modalTanggal" class="fw-bold"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.open-foto-modal').on('click', function() {
            const fotoUrl = $(this).data('foto');
            const judul = $(this).data('judul');
            const kreator = $(this).data('kreator');
            const tanggal = $(this).data('tanggal');
            
            $('#fotoModalLabel').text(judul);
            $('#modalFoto').attr('src', fotoUrl);
            $('#modalFoto').attr('alt', judul);
            $('#modalKreator').text(kreator);
            $('#modalTanggal').text(tanggal);
            $('#fotoModal').modal('show');
        });

        $('#fotoModal').on('shown.bs.modal', function () {
            $(document).on('keydown.modal', function(event) {
                if (event.key === 'Escape') {
                    $('#fotoModal').modal('hide');
                }
            });

            $('#modalFoto').on('dblclick', function() {
                if (!document.fullscreenElement) {
                    if (document.documentElement.requestFullscreen) {
                        document.documentElement.requestFullscreen();
                    } else if (document.documentElement.webkitRequestFullscreen) {
                        document.documentElement.webkitRequestFullscreen();
                    } else if (document.documentElement.msRequestFullscreen) {
                        document.documentElement.msRequestFullscreen();
                    }
                } else {
                    if (document.exitFullscreen) {
                        document.exitFullscreen();
                    } else if (document.webkitExitFullscreen) {
                        document.webkitExitFullscreen();
                    } else if (document.msExitFullscreen) {
                        document.msExitFullscreen();
                    }
                }
            });
        });
        $('#fotoModal').on('hidden.bs.modal', function () {
            $(document).off('keydown.modal');
            $('#modalFoto').off('dblclick');
        });
    });
</script>
@endsection