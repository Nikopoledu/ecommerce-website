<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <!-- Navbar top -->
          <div class="nav_top">
            <ul>
              <li><a href="#home">Home</a></li>
              <li><a href="#news">News</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="#about">About</a></li>
            </ul>
        </div>
      <!-- End Navbar top -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                        <!-- Categories -->
                          <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    Categories <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                    <li> <a href="#"> Tshirt</a> </li>
                                    <li> <a href="#"> Kaos</a> </li>
                                    <li> <a href="#"> Dress</a> </li>
                                    <li> <a href="#"> Jeans</a> </li>
                              </ul>
                          </li> 
                             <!-- End Categories -->
                          <li><a href="#">Products</a></li>
                    </ul>

                  <!--   Search Form -->
                     <div class="col-lg-5" style="margin: 17px;">
                      <div class="input-group">
                        <span class="input-group-btn">
                          <button class="btn btn-warning" type="button">Go!</button>
                        </span>
                        <input type="text" class="form-control" placeholder="Search..">
                      </div>
                      </div>  
                      <!--   End Search Form -->
           
                       <!-- Cart -->
                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="fa fa-cart-plus" style="color: #fff; font-size: 21px;"></i><span class="label label-danger" style="font-size: 60%;">  1</span> <span class="caret"></span></a>

                      <ul class="dropdown-menu dropdown-cart" role="menu" style="margin-top: 8px;">
                      <li>
                          <span class="item">
                          <span class="item-left">
                           <div class="row">
                            <div class="col-md-3" style="padding-right: 0;">
                                <img src="{{asset('/images/product_image.jpg')}}" alt="" style="width: 100%" />
                            </div>
                           <div class="col-md-7" style="padding-left: 0;">
                            <span class="item-info">
                            <p style="line-height: 1.2; margin-bottom: 0;">Gammie Plain Cold Shoulder Blouse</p>
                            <p><b>$100000</b></p>
                          </span>
                          </div>
                          <div class="col-md-2">
                             <form action="#" method="post">
                                {{ csrf_field() }}
                                 {{ method_field('DELETE') }}
                             <button type="submit" class="btn btn-xs btn-danger pull-right">x</button>
                            </form>
                        </div>
                        </div>
                      </span>
                    </span>
                  </li>
                  <li class="divider"></li>
                  <li><a class="text-center" href="#">View Cart</a></li>
                  </ul>
                </li>
              </ul>
                   <!-- End Cart -->

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        @include('layouts.includes.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
