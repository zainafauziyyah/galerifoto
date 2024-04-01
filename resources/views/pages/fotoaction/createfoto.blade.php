@extends('layouts/app')
@section('content')
<div class="container">
    <p>Create your memories here</p>
    @if($errors->any())
    @foreach($errors->all() as $e)
    {{$e}}
    @endforeach
    @endif
<form class="form" enctype="multipart/form-data" action="{{ route('pages.foto') }}" method="POST">
    @csrf
    <span class="form-title">Post your photo</span>
    <p class="form-paragraph">
        File should be an image
    </p>     

    <div class="judul d-flex">
        <label style="margin-right: 4rem" for="judul_foto">Title</label>
        <input class="form-control" type="text" id="judul_foto" name="judul_foto" required>
    </div>
    <br>
    <div class="desk d-flex">
        <label style="margin-right: 1rem" for="deskripsi_foto">Description</label>
        <textarea class="form-control"  id="deskripsi_foto" name="deskripsi_foto" required></textarea>
    </div>
    <br>
    <br>
    <input class="btn form-control" type="file" id="file" name="lokasi_file">
    <br>
    <br>
    <button type="submit" class="btn btn-primary">Upload</button>
    <br>
</form>
</div>


@endsection
