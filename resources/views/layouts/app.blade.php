{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}

<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>Travel</title>

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="{{ asset('master/assets/logo/favicon.png') }}"/>

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="{{ asset('master/assets/css/font-awesome.min.css') }}" />

		<!--animate.css-->
		<link rel="stylesheet" href="{{ asset('master/assets/css/animate.css') }}" />

		<!--hover.css-->
		<link rel="stylesheet" href="{{ asset('master/assets/css/hover-min.css') }}">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="{{ asset('master/assets/css/datepicker.css') }}" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="{{ asset('master/assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('master/assets/css/owl.theme.default.min.css') }}"/>

		<!-- range css-->
        <link rel="stylesheet" href="{{ asset('master/assets/css/jquery-ui.min.css') }}" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="{{ asset('master/assets/css/bootstrap.min.css') }}" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="{{ asset('master/assets/css/bootsnav.css') }}"/>

		<!--style.css-->
		<link rel="stylesheet" href="{{ asset('master/assets/css/style.css') }}" />

		<!--responsive.css-->
		<link rel="stylesheet" href="{{ asset('master/assets/css/responsive.css') }}" />

	</head>

	<body>
        
        <div class="container-fluid">
            @yield('content')
        </div>

		<script src="{{ asset('master/assets/js/jquery.js') }}"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="{{ asset('master/assets/js/bootstrap.min.js') }}"></script>

		<!-- bootsnav js -->
		<script src="{{ asset('master/assets/js/bootsnav.js') }}"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="{{ asset('master/assets/js/jquery.filterizr.min.js') }}"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="{{ asset('master/assets/js/jquery-ui.min.js') }}"></script>

        <!-- counter js -->
		<script src="{{ asset('master/assets/js/jquery.counterup.min.js') }}"></script>
		<script src="{{ asset('master/assets/js/waypoints.min.js') }}"></script>

		<!--owl.carousel.js-->
        <script  src="{{ asset('master/assets/js/owl.carousel.min.js') }}"></script>

        <!-- jquery.sticky.js -->
		<script src="{{ asset('master/assets/js/jquery.sticky.js') }}"></script>

        <!--datepicker.js-->
        <script  src="{{ asset('master/assets/js/datepicker.js') }}"></script>

		<!--Custom JS-->
		<script src="{{ asset('master/assets/js/custom.js') }}"></script>


	</body>

</html>