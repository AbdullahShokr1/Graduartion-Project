<x-homea>
    <div class="space"style="height: 100px;">
        <div class="row">
        </div>
    </div>
    <div class="container pt-5 pb-5 mt-5 mb-5">
        <div class="row mt-5 justify-content-center" >
            @if(session('success'))
                <div class="alert alert-success alert-dismissible" style="position: fixed;top: 100px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <div class="alert alert-success" role="alert">
                        <p>{{session('success')}}</p>
                    </div>
                </div>
            @endif

            <div class="col-lg-8 p-5" style="box-shadow: 0 10px 30px 0 #00000078; " >
                <div class="text-center">
                    <h2>Contact Us</h2>
                </div>
                <form class="black-bg contact-form c-mb-20 c-gutter-20" method="post" action="{{route('store-contact')}}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="ds form-group has-placeholder">
                                <label for="name">Full Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="30" value="{{old('name')}}" name="name" id="name" class="form-control" placeholder="Name">
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
                                <label for="subject">Subject
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="30" value="{{old('subject')}}" name="subject" id="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="ds form-group has-placeholder">
                                <label for="message">Message</label>
                                <textarea aria-required="true" rows="6" cols="4" name="message" id="message" class="form-control" placeholder="Message">{{old('message')}}</textarea>
                            </div>
                        </div>
                    </div>
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
        </div>
    </div>
</x-homea>

