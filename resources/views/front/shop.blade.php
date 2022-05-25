<x-homea title="Shop">
    <!--start content-->
    <div class="container " id="card" style="margin-top: 8rem !important;">
        <div class="row ">
            @foreach($products as $product)
                <div class="col-md-3 mb-4 p-2 shadow">
                    <div class="card pb-3" style="z-index: 1; ">
                        <div style="z-index: 1; overflow: hidden;">
                            <div class="badge bg-dark text-white card-badge card-badge-start text-uppercase">
                                {{$product->offer}}
                            </div>
                            <a href="{{route('product',$product->id)}}"><img src="{{asset('front/images/products/'.$product->photo)}}" class="card-img-top zoom" alt="..."></a>
                        </div>
                        <div class="card-body">
                            <div class=" d-flex justify-content-between align-items-center">
                                <div class="review">
                                    <div class="rating" style="color: #ffd814;">
                                        @if(((($product->review->max('review')/$product->review->count())*100)/100))
                                            @if(((($product->review->max('review')/$product->review->count())*100)/100) < 2)
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            @elseif(((($product->review->max('review')/$product->review->count())*100)/100) > 1 && ((($product->review->max('review')/$product->review->count())*100)/100) < 3)
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            @elseif(((($product->review->max('review')/$product->review->count())*100)/100) > 2 && ((($product->review->max('review')/$product->review->count())*100)/100) < 4)
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            @elseif(((($product->review->max('review')/$product->review->count())*100)/100) > 3 && ((($product->review->max('review')/$product->review->count())*100)/100) < 5)
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
                                    <p>({{$product->review->count()}} Review)</p>
                                </div>
                                <div class="price"> ${{$product->price}} </div>
                            </div>
                            <div class="overlay" style="text-align: center; margin-left: -20px;">
                                <a type="button" class="btn btn-danger" href="{{route('GlassesModel',$product->id)}}">live view</a>
                                <a class="btn btn-warning" onclick="event.preventDefault(); document.getElementById('cart-form-{{$product->id}}').submit();">Add to cart</a>
                                <form method="post" action="{{route('cart.store',$product->id)}}" id="cart-form-{{$product->id}}">
                                    @csrf
                                    <input name="user_id" value="@if(Auth::user('user')){{Auth::user('user')->id}}@endif" hidden>
                                    <input name="product_id" value="{{$product->id}}" hidden>
                                    <input name="amount" value="1" hidden>
                                    <input name="total_cost" value="{{($product->price)*(1)}}" hidden>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mb-5 " style="text-align:center;">
            <div class="col text-center">
                <div id="myDIV">
                    <div class="mt-4 mypagination">
                        {{ $products->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end content-->
    <hr>
    <section class="pt-5 pb-5 foo" style="background-color: #e9e9e9;">
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













