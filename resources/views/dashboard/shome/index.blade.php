<x-backindc>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Home Page Settings</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Home</a></li>
                            <li class="breadcrumb-item">Settings</li>
                            <li class="breadcrumb-item active">Home Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Home Page Settings</h3>
                @if(session('success'))
                    <div class="alert alert-info" role="alert">
                        {{session('success')}}
                    </div>
                @endif
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputTitle">Banner</label>
                            <input type="text" name="banner" value="{{$shome->banner}}"  class="form-control" id="exampleInputTitle" placeholder="Enter banner" disabled>

                            <label for="exampleInputTitle">Banner Description</label>
                            <input type="text" name="banner_description" value="{{$shome->banner_description}}"  class="form-control" id="exampleInputTitle" placeholder="Enter Banner Description" disabled>
                        </div>
                        @error('banner')
                        {{$message}}
                        @enderror
                        @error('banner_description')
                        {{$message}}
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputFile">Banner Photo</label>
                            <div class="ml-2 col-sm-12">
                                <img src="{{ asset('front/images/home')}}/{{$shome -> banner_photo}}" id="preview" class="img-thumbnail">
                            </div>
                        </div>
                        {{----}}
                        <div class="form-group">
                            <label for="exampleInputTitle">Banner</label>
                            <input type="text" name="banner1" value="{{$shome->banner1}}"  class="form-control" id="exampleInputTitle" placeholder="Enter banner" disabled>

                            <label for="exampleInputTitle">Banner Description</label>
                            <input type="text" name="banner1_description" value="{{$shome->banner1_description}}"  class="form-control" id="exampleInputTitle" placeholder="Enter Banner Description" disabled>
                        </div>
                        @error('banner1')
                        {{$message}}
                        @enderror
                        @error('banner1_description')
                        {{$message}}
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputFile">Banner Photo</label>
                            <div class="ml-2 col-sm-12">
                                <img src="{{ asset('front/images/home')}}/{{$shome -> banner1_photo}}" id="preview" class="img-thumbnail">
                            </div>
                        </div>
                        {{----}}

                        <div class="form-group">
                            <label for="exampleInputDescription">Facebook</label>
                            <input type="text" name="social1" value="{{$shome->social1}}" class="form-control" id="exampleInputDescription" placeholder="Enter description" disabled>
                        </div>
                        @error('social1')
                        {{$message}}
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputDescription">Twitter</label>
                            <input type="text" name="social2" value="{{$shome->social2}}" class="form-control" id="exampleInputDescription" placeholder="Enter description" disabled>
                        </div>
                        @error('social2')
                        {{$message}}
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputDescription">Instagram</label>
                            <input type="text" name="social3" value="{{$shome->social3}}" class="form-control" id="exampleInputDescription" placeholder="Enter description" disabled>
                        </div>
                        @error('social3')
                        {{$message}}
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputDescription">Linked In</label>
                            <input type="text" name="social4" value="{{$shome->social4}}" class="form-control" id="exampleInputDescription" placeholder="Enter description" disabled>
                        </div>
                        @error('social4')
                        {{$message}}
                        @enderror
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="{{route('dashboard.home.edit',$shome->id)}}" class="btn btn-primary" >Edit</a>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
    </div>
</x-backindc>

