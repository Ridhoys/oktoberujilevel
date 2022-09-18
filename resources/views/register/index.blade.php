<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-5 mt-5">
                <div class="card shadow mb-5 bg-body rounded">
                    <div class="card-header">
                        <h4 class="text-center">Regiter</h4>
                    </div>
                    <div class="card-body">
                        <form class="login-form" action="/register" method="post">
                            @csrf
                            <div class="mb-3 form-floating">
                                <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="nik" name="nik" required value="{{ old('nik') }}">
                                <label for="name">NIK</label>
                                <div class="invalid-feedback">
                                    @error('nik')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" placeholder="nama Lengkap" name="nama_lengkap" required value="{{ old('nama_lengkap') }}">
                                <label for="username">Nama Lengkap</label>
                                <div class="invalid-feedback">
                                    @error('nama_lengkap')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" placeholder="email@example.com" name="email" required value="{{ old('email') }}">
                                <label for="email" class="form-label ">Email Address</label>
                                <div class="invalid-feedback">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleFormControlInput1" placeholder="password" name="password" required value="{{ old('password') }}">
                                <label for="password" class="form-label ">Password</label>
                                <div class="invalid-feedback">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- <div class="login-page">
        <div class="form">
            
        </div>
    </div> --}}

    <script>
        $('.message a').click(function(){
            $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
