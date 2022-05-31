<x-homea title="Payment">
    <!--start content-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mt-5">

                <h5 class="pr-2" style="display: inline;"> <i class="fas fa-check-circle text-success mr-2"></i>Shipping
                </h5>
                <h5 class="pr-2" style="display: inline;"> <i class="fas fa-check-circle text-success mr-2"></i>Checkout
                </h5>
                <h5 class="pr-2" style="display: inline;"> <i
                        class="fas fa-ramp-loading text-success mr-2"></i>Confirmation
                </h5>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-5">
                <div class="method mt-3 mb-3">
                    <h3>Choose a payment method</h3>
                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1978060/visa.png' alt='' class="visa">
                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1978060/mastercard.png' alt=''
                         class="mastercard">
                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1978060/paypal.png' alt='' class="paypal">
                </div> <!-- .method -->
                <form>
                    <div class="form-group">
                        <label for="exampleInputCredit-number"><b>Credit card number</b></label>
                        <input type="text" class="form-control" id="exampleInputECredit-number"
                               placeholder="Enter card number" required>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputCard-name"><b>Card holder name</b></label>
                        <input type="email" class="form-control" id="exampleInputCard-name"
                               placeholder="Enter your name in card" required>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputExpiration_date"><b>Expiration date</b></label>
                        <select class="form-control" style="width: 100px; display: inline;">
                            <option>Month</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                        <select class="form-control" style="width: 100px; display: inline;">
                            <option>Year</option>
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSecurity"><b>Security</b></label>
                        <input type="password" class="form-control" id="exampleInputSecurity" placeholder="Security"
                               required>
                    </div>

                    <button type="submit" class="btn btn-outline-primary mt-2 mb-2" style="width: 100%;"> Checkout</button>
                </form>
            </div>

            <div class="col-md-4" style="margin-left: 200px;box-shadow: 0 10px 30px 0 rgb(13 12 13 / 20%); ">
                <div class=" text-center">
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover text-center">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Price</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Total cost</th>
                            </tr>
                            </thead>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->order->id}}</td>
                                    <td>{{$order->producut->price}}</td>
                                    <td>{{$order->amount}}</td>
                                    <td>{{$order->total_cost}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end content-->
    <hr>
</x-homea>



{{--<x-homea title="Payment">--}}
{{--    <!--start content-->--}}
{{--    <div class="container mt-5">--}}
{{--        <div class="row">--}}
{{--            <div class="col-6 mt-5 p-3">--}}

{{--                <h4 class="pr-2" style="display: inline;"> <i class="fas fa-check-circle text-success mr-2"></i>Shipping--}}
{{--                </h4>--}}
{{--                <h4 class="pr-2" style="display: inline;"> <i class="fas fa-check-circle text-success mr-2"></i>Checkout--}}
{{--                </h4>--}}
{{--                <h4 class="pr-2" style="display: inline;"> <i--}}
{{--                        class="fas fa-ramp-loading text-success mr-2"></i>Confirmation--}}
{{--                </h4>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="container">--}}
{{--        <div class="row mb-5">--}}
{{--            <div class="col-md-5">--}}
{{--                <div class="method">--}}
{{--                    <h2>Choose a payment method</h2>--}}
{{--                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1978060/visa.png' alt='' class="visa">--}}
{{--                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1978060/mastercard.png' alt=''--}}
{{--                         class="mastercard">--}}
{{--                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1978060/paypal.png' alt='' class="paypal">--}}
{{--                </div> <!-- .method -->--}}
{{--                <form>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputCredit-number"><b>Credit card number</b></label>--}}
{{--                        <input type="text" class="form-control" id="exampleInputECredit-number"--}}
{{--                               placeholder="Enter card number" required>--}}

{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputCard-name"><b>Card holder name</b></label>--}}
{{--                        <input type="email" class="form-control" id="exampleInputCard-name"--}}
{{--                               placeholder="Enter your name in card" required>--}}

{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputExpiration_date"><b>Expiration date</b></label>--}}
{{--                        <select class="form-control" style="width: 100px; display: inline;">--}}
{{--                            <option>Month</option>--}}
{{--                            <option>01</option>--}}
{{--                            <option>02</option>--}}
{{--                            <option>03</option>--}}
{{--                        </select>--}}
{{--                        <select class="form-control" style="width: 100px; display: inline;">--}}
{{--                            <option>Year</option>--}}
{{--                            <option>2019</option>--}}
{{--                            <option>2020</option>--}}
{{--                            <option>2021</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputSecurity"><b>Security</b></label>--}}
{{--                        <input type="password" class="form-control" id="exampleInputSecurity" placeholder="Security"--}}
{{--                               required>--}}
{{--                    </div>--}}

{{--                    <button type="submit" class="btn btn-dark mt-2 mb-2" style="width: 100%;"> Checkout</button>--}}
{{--                </form>--}}
{{--            </div>--}}

{{--            <div class="col-md-4" style="margin-left: 200px;box-shadow: 0 10px 30px 0 rgb(13 12 13 / 20%); ">--}}
{{--                <div class=" text-center">--}}
{{--                    <img src="img/istockphoto-1320119936-612x612.jpg" class="card-img-top" alt="...">--}}
{{--                    <div class="card-body">--}}
{{--                        <table class="table table-bordered table-striped table-hover text-center">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th scope="col">Id</th>--}}
{{--                                <th scope="col">Price</th>--}}
{{--                                <th scope="col">Amount</th>--}}
{{--                                <th scope="col">Total cost</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            @foreach($orders as $order)--}}
{{--                                <tr>--}}
{{--                                    <td>{{$order->order->id}}</td>--}}
{{--                                    <td>{{$order->producut->price}}</td>--}}
{{--                                    <td>{{$order->amount}}</td>--}}
{{--                                    <td>{{$order->total_cost}}</td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!--end content-->--}}
{{--    <hr>--}}
{{--</x-homea>--}}
