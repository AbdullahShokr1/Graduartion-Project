<x-homea title="Contact Us">
    <!--start content-->
    <div class="col-lg-8 p-5" style="box-shadow: 0 10px 30px 0 #00000078; " >
        <div class="text-center">
            <h2>Contact Us</h2>
        </div>
        <form class="black-bg contact-form c-mb-20 c-gutter-20" method="post" action="{{route('order-store')}}">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="ds form-group has-placeholder">
                        <label for="name">first_name
                            <span class="required">*</span>
                        </label>
                        <input type="text" aria-required="true" size="30" value="{{old('first_name')}}" name="first_name" id="name" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="ds form-group has-placeholder">
                        <label for="name">last_name
                            <span class="required">*</span>
                        </label>
                        <input type="text" aria-required="true" size="30" value="{{old('last_name')}}" name="last_name" id="last_name" class="form-control" placeholder="Name">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="ds form-group has-placeholder">
                        <label for="email">Email address
                            <span class="required">*</span>
                        </label>
                        <input type="email" aria-required="true" size="30" value="{{old('email')}}" name="email" id="email" class="form-control" placeholder="Email">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="ds form-group has-placeholder">
                        <label for="phone">Phone
                        </label>
                        <input type="text" size="30" value="{{old('phone')}}" name="phone" id="phone" class="form-control" placeholder="Phone">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="ds form-group has-placeholder">
                        <label for="subject">address
                            <span class="required">*</span>
                        </label>
                        <input type="text" aria-required="true" size="30" value="{{old('address')}}" name="address" id="address" class="form-control" placeholder="Subject">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="ds form-group has-placeholder">
                        <label for="subject">city
                            <span class="required">*</span>
                        </label>
                        <input type="text" aria-required="true" size="30" value="{{old('city')}}" name="city" id="city" class="form-control" placeholder="Subject">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="ds form-group has-placeholder">
                        <label for="subject">state
                            <span class="required">*</span>
                        </label>
                        <input type="text" aria-required="true" size="30" value="{{old('state')}}" name="state" id="state" class="form-control" placeholder="Subject">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="ds form-group has-placeholder">
                        <label for="subject">zip_code
                            <span class="required">*</span>
                        </label>
                        <input type="text" aria-required="true" size="30" value="{{old('zip_code')}}" name="zip_code" id="zip_code" class="form-control" placeholder="Subject">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="ds form-group has-placeholder">
                    <label for="subject">amount
                        <span class="required">*</span>
                    </label>
                    <input type="number" aria-required="true" size="30" value="{{old('amount')}}" name="amount" id="amount" class="form-control" placeholder="Subject">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="ds form-group has-placeholder">
                    <label for="subject">total_cost
                        <span class="required">*</span>
                    </label>
                    <input type="number" aria-required="true" size="30" value="{{old('total_cost')}}" name="total_cost" id="total_cost" class="form-control" placeholder="Subject">
                </div>
            </div>
            <input value="false" name="status" hidden>
            <input value="7" name="shopping_id" hidden>


            <div class="row">
                <div class="col-sm-12 text-center mt-10">
                    <div class="form-group">
                        <button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-primary btn-lg">
                            Send Now
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--end content-->
    <hr>
</x-homea>
