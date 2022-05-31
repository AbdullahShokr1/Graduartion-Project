<x-homea title="{{$myuser->name}}">
    <!--start content-->
    <section class="p-xl-4 md-5"></section>
    <div class="container ">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="profile" style="width: 18rem;">
                    <div class="text-center">
                        <img class="review-image imgpro" src="{{asset('front/images/users/'.$myuser->photo)}}">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title"><a href="{{route('profile',Auth::user('user')->name)}}">{{$myuser->name}}</a></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$myuser->email}}</li>
                        <li class="list-group-item"> @isset($myuser->more_info){{$myuser->more_info->phone}}@endisset</li>
                        <li class="list-group-item">@isset($myuser->more_info){{$myuser->more_info->address}}/ {{$myuser->more_info->city}} / {{$myuser->more_info->state}}@endisset</li>
                    </ul>
                    <div class="card-body">
                        <a type="button" href="@if(empty($myuser->more_info)){{route('profile.create',Auth::user('user')->name)}}@else{{route('profile.edit',[Auth::user('user')->name,$myuser->more_info->id])}}@endif" class="btn btn-outline-primary" style="width: 100%;margin: 10px;">Change Information</a>
                        <a type="button" href="{{route('profile.order',Auth::user('user')->name)}}" class="btn btn-outline-primary" style="width: 100%;margin: 10px;">Show Orders</a>
                        <a type="button" href="{{route('profile.editMyUser',[Auth::user('user')->name,$myuser->id])}}" class="btn btn-outline-primary" style="width: 100%;margin: 10px;">Change Photo & Email & Password</a>

                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
    <!--end content-->
    <hr>
</x-homea>

