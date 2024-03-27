@extends('layouts/app')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h2 class="h3 mb-0 text-gray-800">Welcome, {{Auth::user()->username}} the web present you can post, like, and comment. Upload your posts now!</h2>
</div>

<a id="create" href="{{route('pages.createfoto')}}">New Post</a>


<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
</div>

<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
</div>
@endsection