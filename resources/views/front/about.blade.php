<x-homea title="About Us">
    <!--start content-->
    <div class="container " style="margin-top: 150px;">
        <h2 class="text-center mb-5">Our Team : The Five Adventurers</h2>
        <div class="row">
            @foreach($abouts as $about)
                <div class="col-md mb-5">
                    <div class="col-md mb-5">
                        <div class="card text-center">
                            <div style="z-index: 1; overflow: hidden;"> <img src="{{ asset('front/images/about/'.$about->photo)}}" class="card-img-top zoom" alt="..."></div>
                            <div class="card-body">
                                <h2>{{$about->name}}</h2>
                                <p class="title">{{$about->role}}</p>
                                <p>{{$about->des}}</p>
                                <p>{{$about->email}}</p>
                                <button class="btn btn-dark" style="width: 100%;">Contact</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="text-center p-3" style="background-color: #e9e9e9;">
        <h1>Our Vision</h1>
        <br>
        <h3>To Contribute to the sustainable development of society & that of environment with which we interact all over the world</h3>
    </div>
    <!--end content-->
    <hr>
</x-homea>
