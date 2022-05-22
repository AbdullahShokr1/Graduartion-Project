<x-homea title="About Us">
    <!--Start content-->

    <section class="shadow mt-5 col-xs-12" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('front/images/home/banner_photo.png')}}') no-repeat center top;  background-size: cover; position: relative; min-height: 690px; margin-bottom: 100px; display: flex;align-items: end;padding: 41px;">
        <div class="container">
            <div class="row text-start " style="">
                <div class="text-white col-xl-7 p-4 " style=" background-color: rgba(0,0,0, 0.4);  border: 1px solid #f1f1f1;">
                    <h1>We are The Five Adventurers</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="container mb-5 wdw ">
        <div class="col-md-5 text-center">
            <h3>The Five Adventurers core team</h3>
            <pre class="text-muted m-0">People behind your great shopping experience</pre>
        </div>
        <div class="row">
            @foreach($abouts as $about)
                <div class="col-lg-4 col-sm-6 mt-5">
                    <div class="d-flex align-items-center"><img class="rounded-circle shadow" src="{{ asset('front/images/about/'.$about->photo)}}" width="96" alt="Aya-M-Fouda">
                        <div class="ml-4 ">
                            <h5 class=" mb-1">{{$about->name}}</h5>
                            <p class="text-muted mb-0">{{$about->role}} & {{$about->des}}</p>
                            <a class="p-0 text-decoration-none blog-head" href="">
                                <i class="fa fa-envelope"></i> {{$about->email}}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <div class="container  mb-5 pt-5">
        <div class="row ">
            <div class=" col-8 ml-5">
                <h5 class="text-info">- Vision</h5>

                <p class="text-muted">To Contribute to the sustainable development of society & that of environment with
                    which we interact all over the world
                </p>
            </div>
        </div>
        <hr>
        <div class="row ">
            <div class=" col-8 ml-5 mt-2">
                <h5 class="text-info">- Mission</h5>
                <p class="text-muted ">We will purse our goals on national and international markets by adding new
                    features on our sunglasses <br> We made filters to help you choose the most suitable sunglasses.
                </p>
            </div>
        </div>
    </div>
    <!--End content-->
    <hr>
</x-homea>
