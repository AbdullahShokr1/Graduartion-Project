@extends('front.layouts.profile')
@section('content')
    <div class="col-md-8 table ">
        <form class="mb-4 form text-muted" method="post" action="{{route('profile.store',Auth::user('user')->name)}}">
            @csrf
            <div class="bg-light p-4 mb-4">
                <div class="d-flex align-items-center">
                    <div class="text-center">
                        <img class="review-image imgpro" src="{{asset('front/images/users/'.$myuser->photo)}}">
                    </div>
                    <div class="p-3">
                        <a  href="{{route('profile.editMyUser',[Auth::user('user')->name,$myuser->id])}}" class="btn btn-light text-dark shadow" type="button"> <i class="fa fa-sync-alt mr-1" aria-hidden="true"></i>Change Avatar </a>
                        <div class=" mb-0 text-muted"><small>JPG, GIF or PNG image. 300 x 300 required.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-2">
                        <label class="form-label" for="FirstName">First Name *</label>
                        <input name="first_name" value="{{old('first_name')}}" placeholder="Enter your First Name" required="" type="text" id="first_name" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-2">
                        <label class="form-label" for="LastName">Last Name *</label>
                        <input name="last_name" value="{{old('last_name')}}" placeholder="Enter your name" required="" type="text" id="last_name" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-2">
                        <label class="form-label" for="phone">Phone *</label>
                        <input name="phone" value="{{old('phone')}}" placeholder="Enter your phone number" required="" type="text" id="phone" class="form-control">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="mb-2">
                        <label class="form-label" for="Address">Address *</label>
                        <input name="address" value="{{old('address')}}" placeholder="Enter your  Address" required="" type="text" id="address" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="mb-2">
                        <label class="form-label" for="City">City *</label>
                        <input name="city" value="{{old('city')}}" placeholder="" required="" type="text" id="City" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-2">
                        <label class="form-label" for="State">State *</label>
                        <input name="state" value="{{old('state')}}" placeholder="" required="" type="text" id="State" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="mb-2">
                        <label class="form-label ml-2" for="zip">ZIP *</label>
                        <input name="zip_code" value="{{old('zip_code')}}" placeholder="" required="" type="text" id="zip" class="form-control">
                    </div>
                </div>
            </div>
            <hr>
            <input name="user_id" type="text"  value="{{$user_id}}" hidden>
            <div class="d-flex flex-wrap justify-content-end align-items-center">
                <a class="btn btn-light mr-2" type="button" href="{{route('profile',Auth::user('user')->name)}}">Cancel</a>
                <button class="btn btn-warning " type="submit">Save Changes</button>
            </div>
        </form>
    </div>
@stop
