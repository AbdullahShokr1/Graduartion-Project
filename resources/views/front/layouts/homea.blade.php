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
{{$slot}}

<!-- start footer-->
<section class="pt-5 pb-5" style="background-color: #e9e9e9;">
    <div class="container">
        <div class="row text-center pt-3 pb-3">
            <div class="col-md" style="border-right: 1px solid #495057;">
                <i class="fa fa-truck-moving mt-1" style="height:40px; width: 30px;"></i>
                <h6 class="text-uppercase">Free shipping &amp; return</h6>
                <p class="text-muted fw-light text-sm mb-0">Free Shipping over $300</p>
            </div>
            <div class="col-md " style="border-right: 1px solid #495057;">
                <i class="fa fa-money-bill mt-1" style="height:40px; width: 30px;"></i>
                <h6 class="text-uppercase">Money back guarantee</h6>
                <p class="text-muted fw-light text-sm mb-0">30 Days Money Back Guarantee</p>
            </div>
            <div class="col-md">
                <i class="fa fa-headset" style="height:40px; width: 25px;"></i>
                <h6 class="text-uppercase">020-800-456-747</h6>
                <p class="text-muted fw-light text-sm mb-0">24/7 Available Support</p>
            </div>

        </div>
    </div>
</section>
<section class="footer p-lg-5 bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="footer-widget mb-4">
                    <h2 class="heading-2"> <b>logo</b> </h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
                    </p>
                    <ul class="footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="animate fadeInUp ftco-animated"><a href="#"><span
                                    class="icon-twitter"></span></a></li>
                        <li class="animate fadeInUp animated"><a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li class="animate fadeInUp ftco-animated"><a href="#"><span
                                    class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-widget mb-4 ml-md-5">
                    <h2 class="heading-2">Menu</h2>
                    <ul class="list-group" style="font-size: 15px;
                        font-weight: 500;
                        text-transform: uppercase;
                        letter-spacing: 0.1rem;">
                        <li><a href="#" class="py-2 d-block text-white">Shop</a></li>
                        <li><a href="#" class="py-2 d-block text-white">About</a></li>
                        <li><a href="#" class="py-2 d-block text-white">Payment</a></li>
                        <li><a href="#" class="py-2 d-block text-white">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-widget mb-4">
                    <h2 class="heading-2">Help</h2>
                    <div class="d-flex">
                        <ul class=" list-unstyled mr-l-5 pr-l-3 mr-4">
                            <li><a href="#" class="py-2 d-block text-white">Shipping Information</a></li>
                            <li><a href="#" class="py-2 d-block text-white">Returns &amp; Exchange</a></li>
                            <li><a href="#" class="py-2 d-block text-white">Terms &amp; Conditions</a></li>
                            <li><a href="#" class="py-2 d-block text-white">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-widget mb-4">
                    <h2 class="heading-2">Have a Questions?</h2>
                    <div class="mb-3">
                        <ul>
                            <li>
                                <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                <span class="text "> Said street ,Tanta , Egypt</span>
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span class="text ">0123456789</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span class="text">adventurers@gmail.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-md text-center">
            <p>
                Copyright ©2022 All rights reserved

            </p>
        </div>
        <ul class="col-md-12 text-center">

            <a href=""><i class="fab fa-facebook text-white"></i></a>
            <a href=""><i class="fab fa-twitter text-white"></i></a>
            <a href=""><i class="fab fa-instagram text-white"></i></a>
        </ul>
    </div>
</section>
<!-- end footer-->
<!-- start scroll to top-->
<button class="btn btn-info" onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"
                                                                                     aria-hidden="true"></i></button>
<script>
    var mybutton = document.getElementById("myBtn");

    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<script>
    var nav = document.querySelector('nav');
    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
            nav.classList.add('bg-dark', 'shadow');
        }
        else {
            nav.classList.remove('bg-dark', 'shadow');
        }
    });
</script>
<!-- end scroll to top-->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{URL::asset('front/js/all.js')}}"></script>
<script src="{{URL::asset('front/js/jquery-3.5.1.slim.min.js')}}"></script>
<script src="{{URL::asset('front/js/popper.min.js')}}"></script>
<script src="{{URL::asset('front/js/bootstrap.min.js')}}"></script>
</body>

</html>
