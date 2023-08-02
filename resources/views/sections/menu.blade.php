<header class="top-area">
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo">
                        <a href="index.html">
                            tour<span>Nest</span>
                        </a>
                    </div><!-- /.logo-->
                </div><!-- /.col-->
                <div class="col-sm-10">
                    <div class="main-menu">
                    
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button><!-- / button-->
                        </div><!-- /.navbar-header-->
                        <div class="collapse navbar-collapse">		  
                            <ul class="nav navbar-nav navbar-right">
                                <li class="smooth-menu"><a href="#home">Home</a></li>
                                <li class="smooth-menu"><a href="#gallery">Destination</a></li>
                                <li class="smooth-menu"><a href="#pack">Packages </a></li>
                                <li class="smooth-menu"><a href="#spo">Special Offers</a></li>
                                <li class="smooth-menu"><a href="#blog">Blog</a></li>
                                <li class="smooth-menu"><a href="#reg">Registration</a></li>
                                @guest
                                @if (Route::has('login'))
                                <li class="smooth-menu" onclick="goLogin()">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        {{ __('Login') }}
                                    </a>
                                </li>
                                @endif
                                @if (Route::has('register'))
                                <li class="smooth-menu" onclick="goRegister()">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @endif
                                @else
                                <li class="smooth-menu" onclick="goDashboard()">
                                    <a class="nav-link" href="{{ route('dashboard') }}">
                                        <i class="fas fa-user" style="padding-right: 0.25rem"></i>
                                        {{ Auth::user()->name }}
                                    </a>
                                </li>
                                @endguest
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.main-menu-->
                </div><!-- /.col-->
            </div><!-- /.row -->
            <div class="home-border"></div><!-- /.home-border-->
        </div><!-- /.container-->
    </div><!-- /.header-area -->

</header><!-- /.top-area-->