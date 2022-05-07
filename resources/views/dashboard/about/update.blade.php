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
                        <form method="POST" action="{{ route('dashboard.about.update',$about->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Name</label>
                                    <input type="text" name="name" value="{{$about->name}}"  class="form-control" id="exampleInputTitle" placeholder="Enter Name">
                                </div>
                                @error('name')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputTitle">Role</label>
                                    <input type="text" name="role" value="{{$about->role}}"  class="form-control" id="exampleInputTitle" placeholder="Enter Role">
                                </div>
                                @error('role')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputTitle">Description</label>
                                    <input type="text" name="des" value="{{$about->des}}"  class="form-control" id="exampleInputTitle" placeholder="Enter description">
                                </div>
                                @error('des')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputTitle">Email</label>
                                    <input type="email" name="email" value="{{$about->email}}"  class="form-control" id="exampleInputTitle" placeholder="Enter email">
                                </div>
                                @error('email')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputFile">Photo</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="photo" value="{{$about->photo}}" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <div class="ml-2 col-sm-12">
                                        <img src="{{ asset('front/images/about')}}/{{$about -> photo}}" id="preview" class="img-thumbnail">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{route('dashboard.about.index')}}" class="btn btn-danger">Cancel</a>
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

