@extends('layouts/app')
@section('content')
<div class="container">
    <p>Create</p>
<form class="form" enctype="multipart/form-data" action="{{ route('foto.upload') }}" method="POST">
    @csrf
    <span class="form-title">Upload your post</span>
    <p class="form-paragraph">
        File should be an image
    </p>
    <label for="judul_foto">Judul Foto</label>
    <input type="text" id="judul_foto" name="judul_foto" required>
    <br>
    <label for="deskripsi_foto">Deskripsi Foto</label>
    <textarea id="deskripsi_foto" name="deskripsi_foto" required></textarea>
    <br>
    <label for="file-input">Pilih Foto</label>
    <input type="file" accept="image/*" required="" id="file-input" name="foto">
    <br>
    <button type="submit" class="btn btn-primary">Upload</button>
</form>

</div>
@endsection

