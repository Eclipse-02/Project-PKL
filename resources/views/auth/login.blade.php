<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('master/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('master/assets/img/favicon.png') }}">
    <title>
        Login | My POS
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .logo a, .logo a:hover, .logo a:focus{
            color: #000;
            font-size:24px;
            font-family: 'Poppins', sans-serif;
            text-transform: capitalize;
            font-weight: 600;
            margin: 14px 0px 0;
            padding: 10px 0 0 0;
            text-decoration: none;
        }
        .logo a span{
            color: #00d8ff;
            text-transform: capitalize;
        }
    </style>
</head>

<body class="">
    <main class="main-content  mt-0">
        <section>
            <div class="page-header vh-100">
                <div class="container">
                    <div class="row vh-100">
                        <div class="col-12 d-flex flex-column mx-lg-0 mx-auto justify-content-center">
                            <div class="logo">
                                <a href="index.html">
                                    tour<span>Nest</span>
                                </a>
                            </div><!-- /.logo-->
                        </div>
                        <div class="col-6 d-flex flex-column mx-lg-0 mx-auto justify-content-center">
                            <div class=" py-2">
                                <div class="my-5">
                                    <h3 class="font-weight-bolder">Sign In</h3>
                                    <p class="mb-0">Silahkan masukkan password dan email anda</p>
                                </div>
                                <div class="my-5">
                                    <form role="form" action="{{ route('login') }}" method="POST">
                                        @csrf
                                        
                                        <div class="mb-3">
                                            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                placeholder="Email" aria-label="Email" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                placeholder="Password" aria-label="Password" name="password"
                                                required autocomplete="current-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">Ingat Saya</label>
                                        </div>
                                        <div class="text-center mb-3">
                                            <button type="submit"
                                            class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                                        </div>
                                    </form>
                                    <div class="text-center">
                                        <p>Belum memiliki akun? <a href="{{ route('register') }}">Register di sini!</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="rounded position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
          background-size: cover;">
                                {{-- <span class="mask bg-gradient-primary opacity-6"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"My POS"</h4>
                                <p class="text-white position-relative">My POS (Point of Sales) adalah suatu sistem yang digunakan dalam kebutuhan berbagai macam usaha bisnis ritel untuk dapat mempermudah proses transaksi jual beli secara cepat, aman, dan sistematis.</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
