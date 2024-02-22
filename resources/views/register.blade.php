<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <style>
        .main{
            height: 100vh;
            box-sizing: border-box;
        }
    
        .register-box{
            width: 500px;
            border: solid 1px;
            padding: 30px;
        }
    
        form div {
            margin-bottom: 15px;
        }
    </style>
    
    <body>
        <div class="main d-flex flex-column justify-content-center align-items-center">
            @if ($errors->any())
        <div class="alert alert-danger" style="width: 500px">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
        @endif

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('message')}}
            </div>
        @endif
        
            <div class="register-box">
                <form action="" method="post">
                    @csrf
                    @method('post')
                    <div>
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password" class="form-control" required>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" required>
                    </div>
                    
                    <div>
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
                    </div>
                    <div>
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-dark form-control">Register</button>
                    </div>
                    <div class="text-center">
                        Have account? <a href="login">Log-In</a>
                    </div>
                </form>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>