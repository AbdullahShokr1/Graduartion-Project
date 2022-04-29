<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/css/all.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/css/main.css')}}">
    <title>@isset($title){{$title}}@endisset</title>
</head>

<body>
<!--start navbar-->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 ">
    <a class="navbar-brand pl-5 text-white" href="#"><b>Lo</b>go</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center ml-5 navbar_menu " id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link mr-2 text-white" href="Home.html">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2 text-white" href="shop.html">shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2 text-white" href="#">Mirror</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2 text-white" href="#">Payment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2 text-white" href="About.html">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2 text-white" href="contact.html">Contact us</a>
            </li>

        </ul>
        <ul class="navbar_user justify-content-end">
            <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>

            <li class="checkout">
                <a href="#">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </a>
            </li>
            <li><a href="profile.html"><i class="fa fa-user" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</nav>
<!--end navbar-->
