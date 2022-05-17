<x-backindc>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
<!-- Main content -->
<section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update Category info</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('dashboard.home.update',$shome->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="exampleInputFile">Logo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="logo" value="{{$shome->logo}}" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                <div class="ml-2 col-sm-12">
                                    <img src="{{ asset('front/images/home')}}/{{$shome -> logo}}" id="preview" class="img-thumbnail">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Banner</label>
                                    <input type="text" name="banner" value="{{$shome->banner}}"  class="form-control" id="exampleInputTitle" placeholder="Enter banner">

                                    <label for="exampleInputTitle">Banner Description</label>
                                    <input type="text" name="banner_description" value="{{$shome->banner_description}}"  class="form-control" id="exampleInputTitle" placeholder="Enter Banner Description">
                                </div>
                                @error('banner')
                                {{$message}}
                                @enderror
                                @error('banner_description')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputFile">Banner Photo</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="banner_photo" value="{{$shome->banner_photo}}" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <div class="ml-2 col-sm-12">
                                        <img src="{{ asset('front/images/home')}}/{{$shome -> banner_photo}}" id="preview" class="img-thumbnail">
                                    </div>
                                </div>
                                {{----}}
                                <div class="form-group">
                                    <label for="exampleInputTitle">Banner</label>
                                    <input type="text" name="banner1" value="{{$shome->banner1}}"  class="form-control" id="exampleInputTitle" placeholder="Enter banner">

                                    <label for="exampleInputTitle">Banner Description</label>
                                    <input type="text" name="banner1_description" value="{{$shome->banner1_description}}"  class="form-control" id="exampleInputTitle" placeholder="Enter Banner Description">
                                </div>
                                @error('banner1')
                                {{$message}}
                                @enderror
                                @error('banner1_description')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputFile">Banner Photo</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="banner1_photo" value="{{$shome->banner1_photo}}" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <div class="ml-2 col-sm-12">
                                        <img src="{{ asset('front/images/home')}}/{{$shome -> banner1_photo}}" id="preview" class="img-thumbnail">
                                    </div>
                                </div>
                                {{----}}

                                <div class="form-group">
                                    <label for="exampleInputDescription">social1</label>
                                    <input type="text" name="social1" value="{{$shome->social1}}" class="form-control" id="exampleInputDescription" placeholder="Enter description">
                                </div>
                                @error('social1')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputDescription">social1</label>
                                    <input type="text" name="social2" value="{{$shome->social2}}" class="form-control" id="exampleInputDescription" placeholder="Enter description">
                                </div>
                                @error('social2')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputDescription">social1</label>
                                    <input type="text" name="social3" value="{{$shome->social3}}" class="form-control" id="exampleInputDescription" placeholder="Enter description">
                                </div>
                                @error('social3')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputDescription">social1</label>
                                    <input type="text" name="social4" value="{{$shome->social4}}" class="form-control" id="exampleInputDescription" placeholder="Enter description">
                                </div>
                                @error('social4')
                                {{$message}}
                                @enderror
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{route('dashboard.home.index')}}" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
<!-- /.content -->
</div>
</x-backindc>

