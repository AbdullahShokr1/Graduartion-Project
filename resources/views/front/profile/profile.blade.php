@extends('front.layouts.profile')
@section('content')
<div class="col-md-8 table ">
        <form class="mb-4 form text-muted">
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
                @if(isset($myuser->more_info))
                    <div class="col-sm-6">
                        <div class="mb-2">
                            <label class="form-label" for="FirstName">First Name </label>
                            <input name="name" value="{{$myuser->more_info->first_name}}" type="text" id="name" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-2">
                            <label class="form-label" for="LastName">Last Name </label>
                            <input name="name" value="{{$myuser->more_info->last_name}}" type="text" id="name" class="form-control" disabled>
                        </div>
                    </div>
                @else
                    <div class="col-sm-6">
                        <div class="mb-2">
                            <label class="form-label" for="FirstName">Name </label>
                            <input name="name" value="{{$myuser->name}}" type="text" id="name" class="form-control" disabled>
                        </div>
                    </div>
                @endif
                <div class="col-sm-6">
                    <div class="mb-2">
                        <label class="form-label" for="email">E-mail *</label>
                        <input name="email" type="email" value="{{$myuser->email}}" id="email" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-2">
                        <label class="form-label" for="phone">Phone </label>
                        <input name="phone"  @isset($myuser->more_info)value="{{$myuser->more_info->phone}}"@endisset  type="text" id="phone" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="mb-2">
                        <label class="form-label" for="Address">Address </label>
                        <input name="Address" @isset($myuser->more_info)value="{{$myuser->more_info->address}}"@endisset type="text" id="Address" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="mb-2">
                        <label class="form-label" for="City">City </label>
                        <input name="City" @isset($myuser->more_info)value="{{$myuser->more_info->city}}"@endisset type="text" id="City" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-2">
                        <label class="form-label" for="State">State </label>
                        <input name="State" @isset($myuser->more_info)value="{{$myuser->more_info->state}}"@endisset type="text" id="State" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="mb-2">
                        <label class="form-label ml-2" for="zip">ZIP </label>
                        <input name="zip" @isset($myuser->more_info)value="{{$myuser->more_info->zip_code}}"@endisset type="text" id="zip" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <hr>
        </form>
    </div>
@endsection


