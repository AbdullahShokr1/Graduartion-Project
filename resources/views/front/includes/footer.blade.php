
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
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                <h5 class="mb-4 text-center text-white">Want style Ideas and Treats?</h5>
                <form class="mb-5" method="POST" action="{{ route('store-follow')}}">
                @csrf
                    <div class="form-row ">
                        <div class="col">
                            <input type="email" name="email" class="form-control form-control-gray-700 form-control-lg"
                                   placeholder="Enter Email *">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-warning btn-lg">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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
        <div class="row ">
            <div class="col-md text-center">
                <p>
                    Copyright ©2022 All rights reserved

                </p>
            </div>
            <ul class="col-md-12 text-center">
                <a href="https://{{$my_home->social1}}"><i class="fab fa-facebook text-muted"></i></a>
                <a href="https://{{$my_home->social2}}"><i class="fab fa-twitter text-muted"></i></a>
                <a href="https://{{$my_home->social3}}"><i class="fab fa-instagram text-muted"></i></a>
                <a href="https://{{$my_home->social4}}"><i class="fab fa-instagram text-muted"></i></a>
            </ul>
        </div>
    </div>

</section>

<!-- end footer-->
<!-- start scroll to top-->
<button class="btn btn-warning" onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
<section class="progress-wrap">
    <svg  class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</section>
<!-- end scroll to top-->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src='{{ asset('front/js//jquery.min.js') }}'></script>
<script src="{{URL::asset('front/js/all.js')}}"></script>
{{--<script src="{{URL::asset('front/js/jquery-3.5.1.slim.min.js')}}"></script>--}}
<script src="{{URL::asset('front/js/popper.min.js')}}"></script>
<script src="{{ asset('front/js/fontawesome.min.js') }}"></script>
<script src="{{URL::asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{URL::asset('front/js/main.js')}}"></script>
</body>

</html>
