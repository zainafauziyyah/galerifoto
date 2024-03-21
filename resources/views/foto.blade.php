@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Daftar Foto</div>

                    <div class="card-body">
                        <!-- Tambahkan tampilan daftar foto di sini -->
                        <div class="row">
                            @foreach ($photo as $photo)
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                        <img src="{{ $photo->url }}" class="card-img-top" alt="{{ $photo->title }}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $photo->title }}</h5>
                                            <p class="card-text">{{ $photo->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
