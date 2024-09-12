<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Pendaftaran Pelatihan PPKD Jakarta Pusat</title>

    <!-- logo -->
    <link href=" {{ asset('login/img/ppkd.png') }} " rel="icon">
    <link href=" {{ asset('login/img/ppkd.png') }} " rel="apple-touch-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href=" {{ asset('login/plugins/fontawesome-free/css/all.min.css') }} ">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href=" {{ asset('login/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }} ">
    <!-- Theme style -->
    <link rel="stylesheet" href=" {{ asset('login/dist/css/adminlte.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('login/dist/css/style.css') }}">
    <style>
        body {
            background-image: url("{{ asset('login/img/background.jpeg') }}") !important;
            background-size: cover;
            /* Mengatur gambar untuk menutupi seluruh elemen */
            background-position: center center;
            /* Mengatur posisi gambar di tengah */
            background-repeat: no-repeat;
            /* Menghindari pengulangan gambar */
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="login-box mx-auto">
                    <!-- /.login-logo -->
                    <div class="card">
                        <div class="login-logo mt-4 mb-4">
                            <img src=" {{ asset('login/img/ppkd.png') }}" alt="logo" width="150px">
                        </div>
                        <div class="card-body login-card-body">
                            @if ($errors->any())
                                <div class="alert alert-warning">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="user" method="post" action="{{ route('action-login') }} ">
                                @csrf
                                <div class="input-group mb-3">
                                    <input name="email" type="text" class="form-control" placeholder="Username"
                                        required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input name="password" type="password" class="form-control" placeholder="Password"
                                        required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- /.col -->
                                    <div class="col-12">
                                        <input type="submit" name="submit" value="Login"
                                            class="btn btn-login btn-user btn-block">
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>

                        </div>
                        <!-- /.login-card-body -->
                        <hr>
                        <p class="login-box-msg text-sm">Copyright © 2024 FAJRY-OS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src=" {{ asset('login/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src=" {{ asset('login/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src=" {{ asset('login/dist/js/adminlte.min.js') }}"></script>
    <script src=" {{ asset('login/dist/js/adminlte.min.js') }} "></script>
    <script src=" {{ asset('login/dist/js/index.js') }}"></script>

</body>

</html>
