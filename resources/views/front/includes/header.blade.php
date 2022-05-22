<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/css/all.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/css/main.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/css/unicons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/css/owl.theme.default.min.css')}}">

    <title>@isset($title){{$title}}@endisset</title>
</head>

<body>
<!--start navbar-->
<!--start navbar-->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark text-center">
    <a class="navbar-brand ml-3 text-white" href="{{route('home')}}"><img src="{{asset('front/images/home/'.$my_home->logo)}}" style="width: 80px;"></a>
    <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center navbar_menu " id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link mr-2 text-white @if($title=="Home")active @else @endif" href="{{route('home')}}">Home</a>

            </li>
            <li class="nav-item">
                <a class="nav-link mr-2 text-white @if($title=="Shop")active @else @endif" href="{{route('shop')}}">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2 text-white @if($title=="Mirror")active @else @endif" href="{{route('mirror')}}">Mirror</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2 text-white @if($title=="Blog")active @else @endif" href="{{route('blog')}}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2 text-white @if($title=="About Us")active @else @endif" href="{{route('about')}}">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2 text-white @if($title=="Contact Us")active @else @endif" href="{{route('contact')}}">Contact us</a>
            </li>
        </ul>
        <ul class="navbar_user text-center">
            @if(Auth::user('user'))
                <li class="checkout">
                    <a href="{{route('cart.index',Auth::user('user')->name)}}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </a>
                </li>
            @endif

            @if(Auth::user('user'))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if(Auth::user('user')->photo)
                            <img class="avatar-img" src="{{asset('front/images/users/'.Auth::user('user')->photo)}}" width="90" style="max-width: 51%; height: 100%; -o-object-fit: cover; object-fit: cover; border-radius: 50%;" alt="">
                        @else
                            <i class="fa fa-user" aria-hidden="true"></i>
                        @endif

                    </a>
                    <div class="sub-menu dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('profile',Auth::user('user')->name)}}">Profile</a>
                        <div class="dropdown-divider"></div>
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
            @else
                <li><a href="{{route('login')}}"><i class="fas fa-sign-in-alt" aria-hidden="true"></i></a></li>
            @endif
        </ul>
    </div>
</nav>
<!--end navbar-->

