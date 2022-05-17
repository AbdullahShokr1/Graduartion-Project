@extends('front.layouts.profile')
@section('content')
    <div class="col-md-8 table ">
        <form method="POST" action="{{ route('profile.update',[Auth::user('user')->name,$myuser->more_info->id])}}" class="mb-4 form text-muted" >
            @csrf
            @method('put')
            <div class="bg-light p-4 mb-4">
                <div class="d-flex align-items-center">
                    <img class="avatar-img" src="{{asset('front/images/users/'.$myuser->photo)}}" width="90" alt="">
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
                        <input name="first_name" value="{{$moreinfo->first_name}}"  required="" type="text" id="name"
                               class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-2">
                        <label class="form-label" for="LastName">Last Name *</label>
                        <input name="last_name" value="{{$moreinfo->last_name}}"  required="" type="text" id="name"
                               class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-2">
                        <label class="form-label" for="email">E-mail *</label>
                        <input name="email" value="{{$moreinfo->email}}"  required="" type="email" id="email"
                               class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-2">
                        <label class="form-label" for="phone">Phone *</label>
                        <input name="phone" value="{{$moreinfo->phone}}"  required="" type="text"
                               id="phone" class="form-control">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="mb-2">
                        <label class="form-label" for="Address">Address *</label>
                        <input name="address" value="{{$moreinfo->address}}" required="" type="text"
                               id="Address" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="mb-2">
                        <label class="form-label" for="City">City *</label>
                        <input name="City" value="{{$moreinfo->city}}"  required="" type="text" id="City"
                               class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-2">
                        <label class="form-label" for="State">State *</label>
                        <input name="State" value="{{$moreinfo->state}}"  required="" type="text" id="State"
                               class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="mb-2">
                        <label class="form-label ml-2" for="zip">ZIP *</label>
                        <input name="zip" value="{{$moreinfo->zip_code}}"  required="" type="text" id="zip" class="form-control">
                    </div>
                </div>
            </div>
            <input name="user_id" value="{{$moreinfo->user_id}}"  type="text"  hidden>
            <hr>
            <div class="d-flex flex-wrap justify-content-end align-items-center">
                <a class="btn btn-light mr-2" type="button" href="{{route('profile',Auth::user('user')->name)}}">Cancel</a>
                <button class="btn btn-warning " type="submit">Save Changes</button>
            </div>
        </form>
    </div>
@stop

