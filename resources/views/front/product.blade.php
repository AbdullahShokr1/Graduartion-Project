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
            <div class="col-md-4 " style="margin-left: 150px;box-shadow: 0 10px 30px 0 #0d0c0d33; ">
                <div class=" text-center mt-5">
                    <h2>#{{$product->id}}</h2>
                    <div class="card-body">
                        <div class=" d-flex justify-content-between align-items-center">
                            <div class="review">
                                <div class="rating" style="color: #ffd814;">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>(120 Review)</p>
                            </div>
                            <div class="text-muted" style="text-decoration: line-through; margin-left: 120px;"> $50
                            </div>
                            <div class="price"> ${{$product->price}} </div>
                        </div>
                        <div class="text-muted">{{$product->describe}}</div>
                        <div class="mb-2 col-lg-6 col-12 mt-2">
                            <label>Items <span class="text-muted">(required)</span></label>
                            <input type="number" id="ItemsNumber" class="form-control" style="max-width: 5rem; text-align: center;" value="1">
                        </div>
                        <button type="button" class="btn btn-dark" style="width: 80%;">Add to card</button>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container mb-4">
        <div class="row">
            <div class="col-2">
                <h1 class="ml-3">4.9</h1>
                <p class="text-success ">VIEW REVIEWS</p>
            </div>
            <div class="col-6 mt-4">
                <p class="text-muted">This minimalist glasses is suitable for any occasion. Whether on the road by
                    bike, shopping or in the nightlife.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="d-flex">
                <div class="text-center"><img class="review-image" src="img/IMG_0598.jpg"><span
                        class="text-uppercase text-muted">Dec 2018</span></div>
                <div>
                    <div class=" col-8 ml-5">
                        <h5 class="mt-2 mb-1">Mohamed Gaber</h5>
                        <div class="mb-2">
                            <div class="rating" style="color: #ffd814;">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <p class="text-muted">One morning, when Gregor Samsa woke from troubled dreams, he found himself
                            transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he
                            lifted
                            his head a little he could see his brown belly, slightly domed and divided by arches into
                            stiff
                            sections</p>
                    </div>
                </div>
            </div>


        </div>
        <hr>
        <div class="row mt-4">
            <div class="d-flex">
                <div class="text-center"><img class="review-image" src="img/zz.jpg"><span
                        class="text-uppercase text-muted">Dec 2018</span></div>
                <div>
                    <div class=" col-8 ml-5">
                        <h5 class="mt-2 mb-1">Zyad Hossam</h5>
                        <div class="mb-2">
                            <div class="rating" style="color: #ffd814;">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <p class="text-muted">The bedding was hardly able to cover it and seemed ready to slide off any
                            moment. His many legs, pitifully thin compared with the size of the rest of him, waved about
                            helplessly as he looked. &quot;What's happened to me?&quot; he thought. It wasn't a dream.
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <hr>

        <div class="row mt-4">
            <div class="d-flex">
                <div class="text-center"><img class="review-image" src="img/photo_2022-04-27_00-11-33.jpg"><span
                        class="text-uppercase text-muted">Dec 2018</span></div>
                <div>
                    <div class=" col-8 ml-5">
                        <h5 class="mt-2 mb-1">Abdullah Shokr</h5>
                        <div class="mb-2">
                            <div class="rating" style="color: #ffd814;">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <p class="text-muted">Samsa was a travelling salesman - and above it there hung a picture that
                            he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <hr>
        <div class="row mt-4">
            <div class="d-flex">
                <div class="text-center"><img class="review-image" src="img/photo_2022-04-27_00-44-52.jpg"><span
                        class="text-uppercase text-muted">Dec 2018</span>
                </div>
                <div>
                    <div class=" col-8 ml-5">
                        <h5 class="mt-2 mb-1">Sara Mostafa</h5>
                        <div class="mb-2">
                            <div class="rating" style="color: #ffd814;">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <p class="text-muted">His room, a proper human room although a little too small, lay peacefully
                            between its four familiar walls. A collection of textile samples lay spread out on the
                            table.
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <hr>
        <div class="row mt-4">
            <div class="d-flex">
                <div class="text-center"><img class="review-image" src="img/photo_2022-04-27_00-12-26.jpg"><span
                        class="text-uppercase text-muted">Dec 2018</span></div>
                <div>
                    <div class=" col-8 ml-5">
                        <h5 class="mt-2 mb-1">Aya-M-Fouda</h5>
                        <div class="mb-2">
                            <div class="rating" style="color: #ffd814;">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <p class="text-muted">The bedding was hardly able to cover it and seemed ready to slide off any
                            moment. His many legs, pitifully thin compared with the size of the rest of him, waved about
                            helplessly as he looked. &quot;What's happened to me?&quot; he thought. It wasn't a dream.
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <hr>

    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h4 class="mb-4">Leave a review</h4>
                <form class="mb-4 form text-muted">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-4"><label class="form-label" for="name">Your name *</label><input
                                    name="name" placeholder="Enter your name" required="" type="text" id="name"
                                    class="form-control"></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4"><label class="form-label" for="rating">Your rate *</label><select
                                    name="rating" class="focus-shadow-0 form-control" id="rating">
                                    <option value="5">★★★★★ (5/5)</option>
                                    <option value="4">★★★★☆ (4/5)</option>
                                    <option value="3">★★★☆☆ (3/5)</option>
                                    <option value="2">★★☆☆☆ (2/5)</option>
                                    <option value="1">★☆☆☆☆ (1/5)</option>
                                </select></div>
                        </div>
                    </div>
                    <div class="mb-4"><label class="form-label" for="email">Your e-mail *</label><input name="email"
                                                                                                        placeholder="Enter your email" required="" type="email" id="email" class="form-control">
                    </div>
                    <div class="mb-4"><label class="form-label" for="review">Review text *</label><input rows="4"
                                                                                                         name="review" placeholder="Enter your review" required="" type="textarea" id="review"
                                                                                                         class="form-control"></div>
                    <button type="submit" class="btn btn-outline-dark">Post review</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="text-center mb-5">
            <h4>YOU MIGHT ALSO LIKE</h4>
        </div>
        <div class="row">
            <div class="col-md mb-5">
                <div class="card" style="z-index: 1;">
                    <div style="z-index: 1; overflow: hidden;">
                        <img src="img/istockphoto-585487906-612x612.jpg" class="card-img-top zoom" alt="...">
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
                        <div>
                            <button type="button" class="btn btn-dark" style="width: 100%;">live view</button>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md">
                <div class="card " style="z-index: 1;">
                    <div style="z-index: 1; overflow: hidden;">
                        <img src="img/istockphoto-1049035462-612x612.jpg" class="card-img-top zoom" alt="...">
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
                        <div>
                            <button type="button" class="btn btn-dark" style="width:100%;"> view</button>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md">
                <div class="card " style="z-index: 1;">
                    <div style="z-index: 1; overflow: hidden;">
                        <img src="img/istockphoto-486548532-612x612.jpg" class="card-img-top zoom" alt="...">
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
                        <div>
                            <button type="button" class="btn btn-dark" style="width: 100%;"> view</button>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md ">
                <div class="card" style="z-index: 1;">
                    <div style="z-index: 1; overflow: hidden;">
                        <img src="img/istockphoto-1215748975-612x612.jpg" class="card-img-top zoom" alt="...">
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
                        <div>
                            <button type="button" class="btn btn-dark" style="width: 100%;"> view</button>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md">
                <div class="card " style="z-index: 1;">
                    <div style="z-index: 1; overflow: hidden;">
                        <img src="img/istockphoto-1149212979-612x612.jpg" class="card-img-top zoom" alt="...">
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
                        <div>
                            <button type="button" class="btn btn-dark" style="width: 100%;"> view</button>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--end content-->
</x-homea>










