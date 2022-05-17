@extends('front.layouts.profile')
@section('content')
<div class="col-md-8 table ">
        <form method="POST" action="{{route('profile.updateMyUser',[Auth::user('user')->name,$myuser->id])}}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" value="{{$myuser->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                </div>
                @error('name')
                {{$message}}
                @enderror
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" value="{{$myuser->email}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                @error('email')
                {{$message}}
                @enderror
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                @error('password')
                {{$message}}
                @enderror
                <div class="form-group">
                    <label for="exampleInputPassword">Password Confirmation</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword" placeholder="Password Confirmation">
                </div>
                @error('password_confirmation')
                {{$message}}
                @enderror
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="photo" value="{{$myuser->photo}}" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                    <div class="ml-2 col-sm-12">
                        <img src="{{ asset('front/images/users/')}}/{{$myuser -> photo}}" id="preview" class="img-thumbnail">
                    </div>
                </div>
                @error('photo')
                {{$message}}
                @enderror
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a class="btn btn-light mr-2" type="button" href="{{route('profile',Auth::user('user')->name)}}">Cancel</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

@endsection


