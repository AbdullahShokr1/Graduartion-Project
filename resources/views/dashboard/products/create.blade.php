<x-backindc>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
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
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add New Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('dashboard.products.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Product Name</label>
                                    <input type="text" name="title" :value="old('title')" class="form-control" id="exampleInputTitle" placeholder="Enter Product Name">
                                </div>
                                @error('title')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputDescribe">Product Description</label>
                                    <input type="text" name="describe" :value="old('describe')" class="form-control" id="exampleInputDescribe" placeholder="Enter Product Description">
                                </div>
                                @error('describe')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputPrice">Product Price</label>
                                    <input type="text" name="price" :value="old('price')" class="form-control" id="exampleInputPrice" placeholder="Enter Product Price">
                                </div>
                                @error('price')
                                {{$message}}
                                @enderror
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Product Writer</label>
                                            <select class="form-control" name="writer_id" >
                                                @foreach ( $admins as $admin)
                                                    <option value="{{ $admin -> id}}">{{ $admin -> name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                @error('writer_id')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="photo" value="{{old('photo')}}" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                @error('photo')
                                {{$message}}
                                @enderror
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add New Product</button>
                                <a href="{{route('dashboard.products.index')}}" class="btn btn-danger">Cancel</a>
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

