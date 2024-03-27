@extends('layouts.app')

@section('content')
    <div class="conten">
        <p>your post</p>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('message')}}
            </div>
        @endif
        <div class="isi d-flex">
            @foreach ($foto as $item)
            <div class="card d-flex" style="width: 300px">
                <img src="{{ asset('storage/foto/'.$item->lokasi_file)}}" alt="">
                    <P>{{$item->judul_foto}}</P>
                    <P>{{$item->deskripsi_foto}}</P>
                    <P>{{$item->tanggal_unggah}}</P>
            </div> 
            @endforeach

        </div>

    </div>
    {{-- @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dissmiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dissmiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row justify-content-start"></div>
    @foreach ($Photo as $foto)
        <div class="col-2 mb-4">
            <div class="card" id="photo">
                <img src="{{ asset('foto/' . $foto->LokasiFile) }}" class="card-img-top" alt="Foto">
                <div class="card-body">
                    <h5 class="card-title text-center fst-italic fw-bold fs-5" style="color:cornflowerblue">
                        {{ $foto->JudulFoto }}</h5>
                </div>
            </div>
        </div>
    @endforeach
    </div> --}}
@endsection
