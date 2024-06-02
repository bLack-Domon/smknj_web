@extends('master')

@section('title', 'Detail Berita')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">
                @foreach ($berita as $b)
                <div class="card mb-3">
                    <img src="{{ asset($b->foto) }}" class="card-img-top w-50 h-50 mx-auto mt-3" alt="{{ $b->judul }}">
                    <div class="card-body">
                        <h4 class="card-title text-center mt-3 w-75 mx-auto">{{ $b->judul }}</h4>
                        <p class="card-text w-75 mx-auto my-5">{!! nl2br(e($b->kalimat)) !!}</p>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end mt-2 py-2"><i class="fa fa-calendar text-primary me-2"></i>{{ $b->created_at }} WIB</small>
                            <small class="flex-fill text-center border-end  mt-2 py-2"><i class="fas fa-tag text-primary me-2"></i>{{ $b->kategori }}</small>
                            <small class="flex-fill text-center py-2 mt-2">
                                <a href="{{ route('berita-sekolah') }}" class="text-danger"><b>Kembali</b></a>
                            </small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection