@extends('layouts/app')
@section('content')
<p>Create</p>
<form class="form">
    <span class="form-title">Upload your post</span>
    <p class="form-paragraph">
        File should be an image
      </p>
     <label for="file-input" class="drop-container">
    <span class="drop-title">Drop here</span>
    or
    <input type="file" accept="image/*" required="" id="file-input">
  </label>
  </form>
@endsection