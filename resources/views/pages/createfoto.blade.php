@extends('layouts/app')
@section('content')
<div class="container">
    <p>Create</p>
    <form class="form" enctype="multipart/form-data">
        <span class="form-title">Upload your post</span>
        <p class="form-paragraph">
            File should be an image
        </p>
        <label for="file-input" class="drop-container">
            <span class="drop-title">Drop here</span>
            or
            <input type="file" accept="image/*" required="" id="file-input" name="foto">
        </label>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection

