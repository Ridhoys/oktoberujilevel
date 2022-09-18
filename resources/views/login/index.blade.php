<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-5 mt-5">
                <div class="card shadow mb-5 bg-body rounded">
                    <div class="card-header">
                        <h4 class="text-center">Login</h4>
                    </div>
                    <div class="card-body">

                        @if (session()->has('loginEror'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginEror') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form class="login-form" action="/login" method="post">
                            @csrf
                            <div class="mb-3 form-floating">
                                <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="nik" name="nik" required autofocus>
                                <label for="nik">NIK</label>
                                <div class="invalid-feedback">
                                    @error('nik')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap" required>
                                <label for="nama_legkap" class="form-label ">Nama Lengkap</label>
                                <div class="invalid-feedback">
                                    @error('nama_lengkap')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="password" class="form-control" id="password" placeholder="password" name="password" required>
                                <label for="password" class="form-label ">Password</label>
                                <div class="invalid-feedback">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
