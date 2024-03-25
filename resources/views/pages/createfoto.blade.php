@extends('layouts/app')
@section('content')
<div class="container">
    <p>Create</p>
<form class="form" enctype="multipart/form-data" action="{{ route('upload.foto') }}" method="POST">
    @csrf
    <span class="form-title">Upload your post</span>
    <p class="form-paragraph">
        File should be an image
    </p>

    <label for="judul_foto">Title</label>
    <input type="text" id="judul_foto" name="judul_foto" required>
    <br>
    <label for="deskripsi_foto">Description</label>
    <textarea id="deskripsi_foto" name="deskripsi_foto" required></textarea>
    <br>
    <br>
    <input type="file" id="file" name="lokasi_file">
    <br>
    <br>
    <button type="submit" class="btn btn-primary">Upload</button>
    <br>
</form>

</div>
@endsection

