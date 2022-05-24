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
                                <a class="btn btn-warning btn-lg" href="{{route('shop')}}" role="button">SHOP NOW</a>
                            </div>
                        </div>
                    @else
                    <div class="carousel-item active">
                        <img src="{{ asset('front/images/home/'.$home->banner_photo)}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$home->banner}}</h5>
                            <p>{{$home->banner_description}}</p>
                            <a class="btn btn-warning btn-lg" href="{{route('shop')}}" role="button">SHOP NOW</a>
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
                                            {{$product->offer}}
                                        </div>
                                        <img src="{{asset('front/images/products/'.$product->photo)}}" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body ">
                                        <h5 class="card-title" style="color:#000b16;"><a href="{{route('product',$product->id)}}">{{$product->title}}</a></h5>
                                        <p class="card-text"><small class="text-muted">{{$product->update_at}}</small></p>
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
                                <a href="{{route('product',$my_product->id)}}"><img src="{{asset('front/images/products/'.$my_product->photo)}}" class="card-img-top zoom" alt="..."></a>
                            </div>
                            <div class="card-body">
                                <div class=" d-flex justify-content-between align-items-center">

                                    <div class="review">
                                        <div class="rating" style="color: #ffd814;">
                                            @if(((($my_product->review->max('review')/$my_product->review->count())*100)/100))
                                                @if(((($my_product->review->max('review')/$my_product->review->count())*100)/100) < 2)
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                @elseif(((($my_product->review->max('review')/$my_product->review->count())*100)/100) > 1 && ((($my_product->review->max('review')/$my_product->review->count())*100)/100) < 3)
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                @elseif(((($my_product->review->max('review')/$my_product->review->count())*100)/100) > 2 && ((($my_product->review->max('review')/$my_product->review->count())*100)/100) < 4)
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="far fa-star"></i>
                                                @elseif(((($my_product->review->max('review')/$my_product->review->count())*100)/100) > 3 && ((($my_product->review->max('review')/$my_product->review->count())*100)/100) < 5)
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                @else
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                @endif
                                            @endif
                                        </div>
                                        <p>({{$my_product->review->count()}} Review)</p>
                                    </div>
                                    <div class="price">${{$my_product->price}}</div>
                                </div>
                                <div class="overlay">
                                    <div>
                                        <a type="button" class="btn btn-danger" href="{{route('GlassesModel',$my_product->id)}}" >live view</a>
                                        <a class="btn btn-warning" onclick="event.preventDefault(); document.getElementById('cart-form-{{$my_product->id}}').submit();">Add to cart</a>
                                        <form method="post" action="{{route('cart.store',$my_product->id)}}" id="cart-form-{{$my_product->id}}">
                                            @csrf
                                            <input name="user_id" value="@if(Auth::user('user')){{Auth::user('user')->id}}@endif" hidden>
                                            <input name="product_id" value="{{$my_product->id}}" hidden>
                                            <input name="amount" value="1" hidden>
                                            <input name="total_cost" value="{{($my_product->price)*(1)}}" hidden>
                                        </form>
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
    <section class="mt-3 pt-2 pb-2" style="background-color: #11101021;  background-image: url('{{asset('front/images/home/photo.jpg')}}');background-attachment: fixed; background-position: inherit; background-repeat: no-repeat; background-size: cover;">
        <div class="container ">
            <div class="row">
                <div class=" text-center py-7 col-lg-6 pt-5" style="color: #000; font-weight: bold;">
                    <h2 class="display-4 text-uppercase mb-4">{{$home->banner1}}</h2>
                    <p class="mb-5">{{$home->banner1_description}}</p>
                    <a class="btn btn-warning btn-lg" href="{{route('shop')}}" role="button">SHOP NOW</a>
                </div>
                <div class="d-none d-lg-flex align-items-end col-lg-6">
                    <div class="text-end ">
                        <img src="{{asset('front/images/home/'.$home->banner1_photo)}}" alt="">
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
                            <a href="{{route('product',$my_last->id)}}"><img src="{{asset('front/images/products/'.$my_last->photo)}}" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <div class=" d-flex justify-content-between align-items-center">
                                    <div class="review">
                                        <div class="rating" style="color: #ffd814;">
                                            @if(((($my_last->review->max('review')/$my_last->review->count())*100)/100))
                                                @if(((($my_last->review->max('review')/$my_last->review->count())*100)/100) < 2)
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                @elseif(((($my_last->review->max('review')/$my_last->review->count())*100)/100) > 1 && ((($my_last->review->max('review')/$my_last->review->count())*100)/100) < 3)
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                @elseif(((($my_last->review->max('review')/$my_last->review->count())*100)/100) > 2 && ((($my_last->review->max('review')/$my_last->review->count())*100)/100) < 4)
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="far fa-star"></i>
                                                @elseif(((($my_last->review->max('review')/$my_last->review->count())*100)/100) > 3 && ((($my_last->review->max('review')/$my_last->review->count())*100)/100) < 5)
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                @else
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                @endif
                                            @endif
                                        </div>
                                        <p>({{$my_last->review->count()}} Review)</p>
                                    </div>
                                    <div class="price">${{$my_last->price}}</div>
                                </div>

                                <div class="overlay" style="position:unset!important;">
                                    <div>
                                        <a type="button" class="btn btn-danger" href="{{route('GlassesModel',$my_last->id)}}" style="width: 100%;">live view</a>
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
    <!--end content-->
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
</x-homea>
