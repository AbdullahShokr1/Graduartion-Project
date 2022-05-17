<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('front/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/css/all.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/css/main.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jautocalc@1.3.1/dist/jautocalc.js"></script>
    <script type="text/javascript">
        $(function() {

            function autoCalcSetup() {
                $('div#calc').jAutoCalc('destroy');
                $('div#calc div.line_items').jAutoCalc({keyEventsFire: true, decimalPlaces: 2, emptyAsZero: true});
                $('div#calc').jAutoCalc({decimalPlaces: 2});
            }
            autoCalcSetup();
        });
    </script>
    <title> Logo</title>
</head>

<body>
<!--start navbar-->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark text-center">
    <a class="navbar-brand ml-3 text-white" href="#"><img src="logo.png" style="width: 80px;"></a>
    <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center navbar_menu " id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link mr-2 text-white active" href="Home.html">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2 text-white" href="shop.html">shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2 text-white" href="#">Mirror</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2 text-white" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2 text-white" href="About.html">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-2 text-white" href="contact.html">Contact us</a>
            </li>

        </ul>
        <ul class="navbar_user text-center">
            <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>

            <li class="checkout">
                <a href="cart.html">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </a>
            </li>
            <li><a href="profile.html"><i class="fa fa-user" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</nav>
<!--end navbar-->

<!--start content-->
<div class="container-fluid text-center bg-light" style="margin-top: 6rem;">
    <div class="d-flex align-items-center justify-content-center">
        <div class="pt-3">
            <h4>Your cart <i class="fa fa-shopping-cart text-secondary" aria-hidden="true"></i></h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="Home.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="shop.html">shop</a></li>
                    <li class="breadcrumb-item"><a href="cart.html">cart</a></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container pb-5 mb-2 mb-md-4 ">
    <div class="row">
        <section class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center pt-3 pb-4">
                <h4>Products</h4>
                <a class="btn btn-outline-warning btn-sm" href="shop.html">&lt Continue shopping</a>
            </div>
            <div class="d-flex justify-content-between pb-3 border-bottom">
                <div class=" d-flex align-items-center">
                    <a href="product.html">
                        <img src="img/istockphoto-1211265457-612x612.jpg" width="160" alt="Product"></a>
                    <div class="pt-2 ml-2 ">
                        <h5 class="mb-2 ">
                            <a href="product.html" class="blog-head text-decoration-none pl-0"> Product name </a>
                        </h5>
                        <div class="pt-2">$154.<small>00</small></div>
                    </div>
                </div>
                <div class="pt-2 text-center text-sm-start" style="max-width: 9rem;">
                    <label class="form-label" for="quantity1">Quantity</label>
                    <input class="form-control" type="number" id="quantity1" min="1" value="1">
                    <button class="btn btn-link text-danger" type="button">
                        <i class="far fa-times-circle"></i>
                        <span class="fs-sm"> Remove</span>
                    </button>
                </div>
            </div>
            <!-- Item-->
            <div class="d-flex justify-content-between pb-3 border-bottom">
                <div class=" d-flex align-items-center">
                    <a href="product.html">
                        <img src="img/istockphoto-1320119936-612x612.jpg" width="160" alt="Product"></a>
                    <div class="pt-2 ml-2">
                        <h5 class="mb-2 ">
                            <a href="product.html" class="blog-head text-decoration-none pl-0"> Product name </a>
                        </h5>
                        <div class="pt-2">$154.<small>00</small></div>
                    </div>
                </div>
                <div class="pt-2 text-center text-sm-start" style="max-width: 9rem;">
                    <label class="form-label" for="quantity1">Quantity</label>
                    <input class="form-control" type="number" id="quantity1" min="1" value="1">
                    <button class="btn btn-link text-danger" type="button">
                        <i class="far fa-times-circle"></i>
                        <span class="fs-sm"> Remove</span>
                    </button>
                </div>
            </div>
            <!-- Item-->
            <div class="d-flex justify-content-between pb-3 border-bottom">
                <div class=" d-flex align-items-center">
                    <a href="product.html">
                        <img src="img/68cd938914b77ee013e24f94aa5c075b.jpg" width="160" alt="Product"></a>
                    <div class="pt-2 ml-2">
                        <h5 class="mb-2 ">
                            <a href="product.html" class="blog-head text-decoration-none pl-0"> Product name </a>
                        </h5>
                        <div class="pt-2">$154.<small>00</small></div>
                    </div>
                </div>
                <div class="pt-2 text-center text-sm-start" style="max-width: 9rem;">
                    <label class="form-label" for="quantity1">Quantity</label>
                    <input class="form-control" type="number" id="quantity1" min="1" value="1">
                    <button class="btn btn-link text-danger" type="button">
                        <i class="far fa-times-circle"></i>
                        <span class="fs-sm"> Remove</span>
                    </button>
                </div>
            </div>
            <!-- Item-->
            <div class="d-flex justify-content-between pb-3 border-bottom">
                <div class=" d-flex align-items-center">
                    <a href="product.html">
                        <img src="img/istockphoto-579246944-612x612.jpg" width="160" alt="Product"></a>
                    <div class="pt-2 ml-2">
                        <h5 class="mb-2 ">
                            <a href="product.html" class="blog-head text-decoration-none pl-0"> Product name </a>
                        </h5>
                        <div class="pt-2">$154.<small>00</small></div>
                    </div>
                </div>
                <div class="pt-2 text-center text-sm-start" style="max-width: 9rem;">
                    <label class="form-label" for="quantity1">Quantity</label>
                    <input class="form-control" type="number" id="quantity1" min="1" value="1">
                    <button class="btn btn-link text-danger" type="button">
                        <i class="far fa-times-circle"></i>
                        <span class="fs-sm"> Remove</span>
                    </button>
                </div>
            </div>
            <button class="btn btn-outline-info d-block w-100 mt-4" type="button">
                <i class="fa fa-sync-alt"></i> Update cart</button>
        </section>
        <!-- Sidebar-->
        <aside class="col-lg-4 pt-4 ">
            <div class="bg-white rounded-3 shadow-lg p-4">
                <div class="py-2 px-xl-2">
                    <div class="text-center mb-4 pb-3 border-bottom">
                        <h2 class="h6 mb-3 pb-1">Subtotal</h2>
                        <h3 class="fw-normal">$265.<small>00</small></h3>
                    </div>
                    <div class="accordion" id="order-options">
                        <div class="accordion-item">
                            <h3 class="accordion-header"><a class="accordion-button collapsed" href="#promo-code"
                                                            role="button" data-bs-toggle="collapse" aria-expanded="false"
                                                            aria-controls="promo-code">Apply promo code</a></h3>
                            <div class="accordion-collapse collapse" id="promo-code"
                                 data-bs-parent="#order-options">
                                <form class="accordion-body needs-validation" method="post" novalidate="">
                                    <div class="mb-3">
                                        <input class="form-control" type="text" placeholder="Promo code"
                                               required="">
                                        <div class="invalid-feedback">Please provide promo code.</div>
                                    </div>
                                    <button class="btn btn-outline-primary d-block w-100" type="submit">Apply promo
                                        code
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><a class="accordion-button" href="#shipping-estimates"
                                                            role="button" data-bs-toggle="collapse" aria-expanded="true"
                                                            aria-controls="shipping-estimates">Shipping estimates</a></h3>
                            <div class="accordion-collapse collapse show" id="shipping-estimates"
                                 data-bs-parent="#order-options">
                                <div class="accordion-body">
                                    <form class="needs-validation" novalidate="">
                                        <div class="mb-3">
                                            <select class="form-select" required="">
                                                <option value="">Choose your country</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Finland">Egypt</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="United States">United States</option>
                                            </select>
                                            <div class="invalid-feedback">Please choose your country!</div>
                                        </div>
                                        <div class="mb-3">
                                            <select class="form-select" required="">
                                                <option value="">Choose your city</option>
                                                <option value="Bern">Cairo</option>
                                                <option value="Brussels">Tanta</option>
                                                <option value="Canberra">Alex</option>
                                                <option value="Helsinki">Aswan</option>
                                                <option value="Mexico City">Mansoura</option>
                                                <option value="Ottawa">Banha</option>
                                                <option value="Washington D.C.">6 October</option>
                                                <option value="Wellington">Mattrouh</option>
                                            </select>
                                            <div class="invalid-feedback">Please choose your city!</div>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control" type="text" placeholder="ZIP / Postal code"
                                                   required="">
                                            <div class="invalid-feedback">Please provide a valid zip!</div>
                                        </div>
                                        <button class="btn btn-outline-primary d-block w-100"
                                                type="submit">Calculate
                                            shipping</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><a class="btn btn-primary btn-shadow d-block w-100 mt-4" href="payment.html"><i
                            class="ci-card fs-lg me-2"></i>Proceed to Checkout</a>
                </div>
            </div>
        </aside>
    </div>
</div>


<!--end content-->
<hr>
{{--<div id="calc">--}}
{{--    @foreach($products as $product)--}}
{{--    <div class="line_items">--}}
{{--        <input type="number" name="qty" value="1">--}}
{{--        <input type="text" name="price" value="9.99">--}}
{{--        <input type="text" name="item_total" value="" jAutoCalc="{qty} * {price}">--}}
{{--    </div>--}}
{{--    @endforeach--}}

{{--    <div>--}}
{{--        <h1>Subtotal</h1>--}}
{{--        <input type="text" name="sub_total" value="" jAutoCalc="SUM({item_total})">--}}
{{--    </div>--}}
{{--</div>--}}

<!-- start footer-->
<section class="footer p-lg-5 bg-dark text-white">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                <h5 class="mb-4 text-center text-white">Want style Ideas and Treats?</h5>
                <form class="mb-5">
                    <div class="form-row ">
                        <div class="col">
                            <input type="email" class="form-control form-control-gray-700 form-control-lg"
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
                    <h2 class="heading-2"> <b>logo</b>


                    </h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia.
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
                        <li><a href="#" class=" d-block text-white">Shop</a></li>
                        <li><a href="#" class=" d-block text-white">About</a></li>
                        <li><a href="#" class=" d-block text-white">Payment</a></li>
                        <li><a href="#" class="d-block text-white">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-widget mb-4">
                    <h2 class="heading-2">Help</h2>
                    <div class="d-flex">
                        <ul class=" list-unstyled mr-l-5 pr-l-3 mr-4">
                            <li><a href="#" class=" d-block text-white">Shipping Information</a></li>
                            <li><a href="#" class="d-block text-white">Returns &amp; Exchange</a></li>
                            <li><a href="#" class="d-block text-white">Terms &amp; Conditions</a></li>
                            <li><a href="#" class="d-block text-white">Privacy Policy</a></li>
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

                <a href=""><i class="fab fa-facebook text-muted"></i></a>
                <a href=""><i class="fab fa-twitter text-muted"></i></a>
                <a href=""><i class="fab fa-instagram text-muted"></i></a>
            </ul>
        </div>
    </div>

</section>
<!-- end footer-->
<!-- start scroll to top-->
<!-- end scroll to top-->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="{{URL::asset('front/js/all.js')}}"></script>
<script src="{{URL::asset('front/js/popper.min.js')}}"></script>
<script src="{{ asset('front/js/fontawesome.min.js') }}"></script>
<script src="{{URL::asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('front/js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>






