@extends('layouts/app')
@section('content')
<p>MEMORABLE YOUR PHOTO</p>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Album</title>
    <style>
        /* Style untuk tampilan formulir */
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        label, input, textarea {
            display: block;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<form class="form" enctype="multipart/form-data">
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
<button type="submit" class="btn btn-primary">Create</button>
<br>
</form>

</div>
</html>

@endsection