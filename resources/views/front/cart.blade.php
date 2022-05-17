<x-homea title="Cart">
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
        <div id="app" class="row">
            <section class="col-lg-8">
                    <div class="d-flex justify-content-between align-items-center pt-3 pb-4">
                        <h4>{{$products->count()}} Products</h4>
                        <small>
                            <a href="{{route('cart.destroy-all',Auth::user('user')->name)}}">Delete All</a>
                        </small>
                        <a class="btn btn-outline-warning btn-sm" href="{{route('shop')}}">&lt Continue shopping</a>
                    </div>
                @foreach($products as $product)
                    <div class="d-flex justify-content-between pb-3 border-bottom">
                        <div class=" d-flex align-items-center">
                            <a href="{{route('product',$product->producut->id)}}">
                                <img src="{{asset('front/images/products/'.$product->producut->photo)}}" width="160" alt="Product"></a>
                            <div class="pt-2 ml-2 ">
                                <h5 class="mb-2 ">
                                    <a href="{{route('product',$product->producut->id)}}" class="blog-head text-decoration-none pl-0"> {{$product->producut->title}} </a>
                                </h5>
                                <div class="pt-2">{{$product->producut->price}}$</div>
                            </div>
                        </div>
                        <div id="calc">
                            <div class="pt-2 text-center text-sm-start line_items" style="max-width: 9rem;">
                                <form method="POST" action="{{ route('cart.update',$product->id)}}" id="update-{{$product->id}}">
                                    @csrf
                                    @method('put')
                                    <label class="form-label" for="quantity1">Quantity</label>
                                    <input class="form-control" id="amount" type="number" name="amount" min="1" value="{{$product->amount}}">
                                    <input class="form-control" type="text" name="user_id" value="{{$product->user_id}}" hidden>
                                    <input class="form-control" type="text" name="product_id" value="{{$product->product_id}}" hidden>
                                    <label class="form-label" for="total_cost">Total Cost</label>
                                    <input class="form-control total_cost" id="total_cost"  type="text" name="total_cost" value="{{($product->amount)*($product->producut->price)}}" >
                                    <a class="btn btn-link text-primary" onclick="document.getElementById('update-{{$product->id}}').submit()"><i class="fa fa-sync-alt"></i>
                                        <span class="fs-sm"> Update</span>
                                    </a>
                                </form>
                                <a class="btn btn-link text-danger" onclick="document.getElementById('destroy-product-{{$product->id}}').submit()"><i class="far fa-times-circle"></i>
                                    <span class="fs-sm"> Remove</span>
                                </a>
                                <form action="{{route('cart.destroy',[Auth::user('user')->name,$product->id])}}" id='destroy-product-{{$product->id}}' method="post" hidden>
                                    @csrf
                                    @method('delete')
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Item-->
                @endforeach
                </section>
            <!-- Sidebar-->
            <aside class="col-lg-4 pt-4 ">
                <div class="bg-white rounded-3 shadow-lg p-4">
                    <div class="py-2 px-xl-2">
                        <div class="text-center mb-4 pb-3 border-bottom">
                            <h2 class=" mb-3 pb-1">Subtotal</h2>
                            <input class="form-control"  id="subtotal" name="subtotal" value="" readonly style="text-align: center;width: 90px;margin: auto;">
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                           Add Code
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <input class="form-control" type="text" placeholder="promo code" required="">
                                            <div class="invalid-feedback">Please provide a valid zip!</div>
                                        </div>
                                        <button class="btn btn-outline-primary d-block w-100" type="submit">Apply promo
                                            code
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form method="POST" action="{{route('order-store')}}" >
                            @csrf
                            @foreach($products as $product)
                                <input class="form-control" name="shopping_id[]" value="{{$product->id}}" hidden>
                                <input class="form-control" name="status[]" value="false" hidden>
                            @endforeach
                            <button class="btn btn-primary btn-shadow d-block w-100 mt-4" type="submit" ><i class="ci-card fs-lg me-2"></i>Proceed to Checkout</button>
                        </form>

                    </div>
                </div>
            </aside>
        </div>
    </div>
    <!--end content-->
    <hr>
    <script type="text/javascript">
        window.onload = ()=> {
            var totalCost = document.getElementsByClassName('total_cost');
            var subtotal = 0;
            for(let i = 0; i < totalCost.length; i++) {
                let element = Number(totalCost[i].value);
                subtotal +=element;
            }
            document.getElementById('subtotal').value= subtotal;
            // document.getElementById('MyFunction').value = subtotal;


        }
    </script>
</x-homea>










