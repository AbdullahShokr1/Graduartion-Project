<x-homea title="Shop">
    <!--start content-->
    <div class="container " id="card" style="margin-top: 8rem !important;">
        <div class="row ">
            @foreach($products as $product)
                <div class="col-md-3 mb-4 p-2 shadow">
                    <div class="card pb-3" style="z-index: 1; ">
                        <div style="z-index: 1; overflow: hidden;">
                            <div class="badge bg-dark text-white card-badge card-badge-start text-uppercase">
                                New
                            </div>
                            <img src="img/istockphoto-476235372-612x612.jpg" class="card-img-top zoom" alt="...">
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
                            <div class="overlay" style="text-align: center; margin-left: -20px;">
                                <button type="button" class="btn btn-danger">live view</button>
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
</x-homea>





