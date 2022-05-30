<x-homea title="Product">
    <!--start content-->
    <div class="container ">
        <div class="row mb-5" style="margin-top: 140px;">
            <div class="col-md-6">


                <div class="card" style="z-index: 1;">
                    <div>
                        <img src="{{asset('front/images/products/'.$product->photo)}}" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
            <div class="col-md-4 " style="margin-left: 150px;box-shadow: 0 10px 30px 0 #0d0c0d33; margin-bottom: 100px;">
                <div class=" text-center mt-5">
                    <h2>{{$product->title}}</h2>
                    <div class="card-body">
                        <div class=" d-flex justify-content-between align-items-center">
                            <div class="review">
                                <div class="rating" style="color: #ffd814;">
                                    @if(($product->review->count())> 0)
                                        @if($total_Review)
                                            @if($total_Review < 2)
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            @elseif($total_Review > 1 && $total_Review < 3)
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            @elseif($total_Review > 2 &&$total_Review < 4)
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            @elseif($total_Review > 3 && $total_Review < 5)
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
                                    @else
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    @endif

                                </div>
                                <p>({{$product->review->count()}} Review)</p>
                            </div>
                            <div class="text-muted" style="text-decoration: line-through; margin-left: 120px;"> $500 </div>
                            <div class="price"> ${{$product->price}} </div>
                        </div>
                        <div class="text-muted">{{$product->describe}}</div>


                        <div class="mb-2 col-lg-6 col-12 mt-2">
                            <form method="post" action="{{route('cart.store',$product->id)}}" id="cart-form-{{$product->id}}">
                                @csrf
                                <input name="user_id" value="@if(Auth::user('user')){{Auth::user('user')->id}}@endif" hidden>
                                <input name="product_id" value="{{$product->id}}" hidden>
                                <input name="total_cost" value="{{($product->price)*(1)}}" hidden>
                                <label>Amount <span class="text-muted">(required)</span></label>
                                <input type="number" id="amount" class="form-control" name="amount" style="max-width: 5rem; text-align: center;" value="1">
                            </form>
                        </div>
                        <button type="button" class="btn btn-dark" style="width: 80%;"  onclick="event.preventDefault(); document.getElementById('cart-form-{{$product->id}}').submit();">Add to card</button>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container mb-4">
        <div class="row">
            <div class="col-2">
                <h1 class="ml-3">{{$total_Review}}</h1>
                <p class="text-success ">VIEW REVIEWS</p>
            </div>
            <div class="col-6 mt-4">
                <p class="text-muted">This minimalist glasses is suitable for any occasion. Whether on the road by
                    bike, shopping or in the nightlife.</p>
            </div>
        </div>
        @foreach($review as $myReview)
            <div class="row mt-4">
                <div class="d-flex">
                    <div class="text-center"><img class="review-image" src="{{asset('front/images/users/'.$myReview->user->photo)}}">
                        <span class="text-uppercase text-muted">{{$myReview->created_at}}</span></div>
                    <div>
                        <div class=" col-8 ml-5">
                            <h5 class="mt-2 mb-1">{{$myReview->user->name}}</h5>
                            <div class="mb-2">
                                <div class="rating" style="color: #ffd814;">
                                    @switch($myReview->review)
                                        @case(1)
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                        @break
                                        @case(2)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        @break
                                        @case(3)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        @break
                                        @case(4)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        @break
                                        @case(5)
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        @break
                                    @endswitch
                                </div>
                            </div>
                            <p class="text-muted">{{$myReview->comment}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
    @if(Auth::user('user'))
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="mb-4">Leave a review</h4>
                    @if($check)
                        <!--From For Update Review-->
                        <form class="mb-4 form text-muted" method="POST" action="{{ route('review.update',$product->id)}}" >
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-4"><label class="form-label" for="name">Your name *</label>
                                        <input class="form-control" value="{{Auth::user('user')->name}}" readonly>
                                        <input name="user_id" required="" type="text" id="name" value="{{Auth::user('user')->id}}" hidden>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-4"><label class="form-label" for="rating">Your rate *</label>
                                        <select name="review" class="focus-shadow-0 form-control" id="review">
                                            <option value="5">★★★★★ (5/5)</option>
                                            <option value="4">★★★★☆ (4/5)</option>
                                            <option value="3">★★★☆☆ (3/5)</option>
                                            <option value="2">★★☆☆☆ (2/5)</option>
                                            <option value="1">★☆☆☆☆ (1/5)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4"><label class="form-label" for="email">Your e-mail *</label>
                                <input class="form-control" value="{{Auth::user('user')->email}}" readonly>
                                <input name="product_id" required="" type="text" id="product_id" value="{{$product->id}}" hidden>
                            </div>
                            <div class="mb-4"><label class="form-label" for="review">Review text *</label>
                                <input rows="4" name="comment" value="{{$check->comment}}" placeholder="Enter your review" required="" type="textarea" id="comment" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-outline-dark">Update review</button>
                        </form>
                    @else
                        <!--From For Create Review-->
                        <form class="mb-4 form text-muted" method="POST" action="{{ route('review.store',$product->id)}}" >
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-4"><label class="form-label" for="name">Your name *</label>
                                        <input class="form-control" value="{{Auth::user('user')->name}}" readonly>
                                        <input name="user_id" required="" type="text" id="name" value="{{Auth::user('user')->id}}" hidden>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-4"><label class="form-label" for="rating">Your rate *</label>
                                        <select name="review" class="focus-shadow-0 form-control" id="review">
                                            <option value="5">★★★★★ (5/5)</option>
                                            <option value="4">★★★★☆ (4/5)</option>
                                            <option value="3">★★★☆☆ (3/5)</option>
                                            <option value="2">★★☆☆☆ (2/5)</option>
                                            <option value="1">★☆☆☆☆ (1/5)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4"><label class="form-label" for="email">Your e-mail *</label>
                                <input class="form-control" value="{{Auth::user('user')->email}}" readonly>
                                <input name="product_id" required="" type="text" id="product_id" value="{{$product->id}}" hidden>
                            </div>
                            <div class="mb-4"><label class="form-label" for="review">Review text *</label>
                                <input rows="4" name="comment" value="{{old('comment')}}" placeholder="Enter your review" required="" type="textarea" id="comment" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-outline-dark">Post review</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    @endif

    <!--end content-->
</x-homea>














