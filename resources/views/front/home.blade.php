<x-homea title="Home" >

    <!--start content-->
    <!--#2 Start Carousel-->
    <section id="myCarousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                    {{$abouts->count()}}
                    @if(($abouts->count())<0)
                        <div class="carousel-item active">
                            <img src="{{ asset('front/images/home/'.$home->banner_photo)}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{$home->banner}}</h5>
                                <p>{{$home->banner_description}}</p>
                            </div>
                        </div>
                    @else
                    <div class="carousel-item active">
                        <img src="{{ asset('front/images/home/'.$home->banner_photo)}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$home->banner}}</h5>
                            <p>{{$home->banner_description}}</p>
                        </div>
                    </div>
                        @foreach($abouts as $about)
                            <div class="carousel-item">
                                <img src="{{ asset('front/images/about/'.$about->photo)}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{$about->name}}</h5>
                                    <p>{{$about->des}}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif

            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!--#2 End Carousel-->
    <!--start content-->
    <section class="p-xl-4 md-5"></section>
    @if(!($products->isEmpty()))
        <div class="container mb-5" style="max-width: 1265px;">
            <div class="row">
                <div class="col">
                    <div class="card-group featured-carousel owl-carousel">
                        @foreach($products as $product)
                            <div class="card item">
                                <div class="work">
                                    <div style="z-index: 1; overflow: hidden; width: auto; height: 219px;">
                                        <div class="badge bg-dark text-white card-badge card-badge-start text-uppercase">
                                            New
                                        </div>
                                        <img src="img/istockphoto-579246944-612x612.jpg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body ">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @else
        <p style="text-align: center;">No Product to show</p>
    @endif
    <div class="container mt-5">
        <div class="text-center mb-5">
            <h4>New Arrivals</h4>
        </div>
        @if(!($best_products->isEmpty()))
            <div class="row">
                @foreach($best_products as $my_product)
                    <div class="col-md-3 mb-5">
                        <div class="card pb-3" style="z-index: 1;">
                            <div style="z-index: 1; overflow: hidden;">
                                <img src="img/istockphoto-480106820-612x612.jpg" class="card-img-top zoom" alt="...">
                            </div>
                            <div class="card-body">
                                <div class=" d-flex justify-content-between align-items-center">

                                    <div class="review">
                                        <div class="rating" style="color: #ffd814;">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <p>(120 Review)</p>
                                    </div>
                                    <div class="price"> $50 </div>
                                </div>
                                <div class="overlay">
                                    <div>
                                        <button type="button" class="btn btn-danger" >live
                                            view</button>
                                        <button type="button" class="btn btn-warning " >Add to
                                            cart</button>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p style="text-align: center;">No Product to show</p>
        @endif
    </div>
    <section class="p-xl-4 md-5"></section>
    <section class="mt-3 pt-2 pb-2" style="background-color: #a0a0a0;">
        <div class="container ">
            <div class="row">
                <div class="text-white text-center py-7 col-lg-6 pt-5">
                    <h2 class="display-4 text-uppercase mb-4">{{$home->banner1}}</h2>
                    <p class="mb-5">{{$home->banner1_description}}</p>
                    <p><a href="{{route('shop')}}" role="button" tabindex="0" class="btn btn-outline-light">Shop now</a></p>

                </div>
                <div class="d-none d-lg-flex align-items-end col-lg-6">
                    <div class="text-end ">
                        <img src="{{asset('front/images/home/'.$home->banner1_photo)}}" alt="" class=" img-thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container" style="margin-top: 150px;">
        <div class="section-tittle mb-5">
            <h2>LAST VIEWED PRODUCTS</h2>
        </div>
        @if(!($last_products->isEmpty()))
            <div class="row">
                @foreach($last_products as $my_last)
                    <div class="col-md mb-5">
                        <div class="card text-center">
                            <img src="img/istockphoto-1215748975-612x612.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class=" d-flex justify-content-between align-items-center">
                                    <div
                                        class="product_bubble product_bubble_right product_bubble_bg d-flex flex-column align-items-center">
                                        <span>-$15</span>
                                    </div>
                                    <div class="review">
                                        <div class="rating" style="color: #ffd814;">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <p>(120 Review)</p>
                                    </div>
                                    <div class="price"> $50 </div>
                                </div>
                            </div>
                            <div class="overlay">
                                <div>
                                    <button type="button" class="btn btn-danger" style="width: 100%;">live view</button>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p style="text-align: center;">No Product to show</p>
        @endif
    </div>
    <!--end content-->
</x-homea>
