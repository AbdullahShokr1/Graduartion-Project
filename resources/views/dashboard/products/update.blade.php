<x-backindc>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Product</h1>
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
                            <h3 class="card-title">Update Product info</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('dashboard.products.update',$product->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Product Name</label>
                                    <input type="text" name="title" value="{{$product->title}}" class="form-control" id="exampleInputTitle" placeholder="Enter Product Name">
                                </div>
                                @error('title')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputDescribe">Product Description</label>
                                    <input type="text" name="describe" value="{{$product->describe}}" class="form-control" id="exampleInputDescribe" placeholder="Enter Product Description">
                                </div>
                                @error('describe')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputPrice">Product Price</label>
                                    <input type="text" name="price" value="{{$product->price}}" class="form-control" id="exampleInputPrice" placeholder="Enter Product Price">
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
                                                    <option value="{{ $admin -> id}}" {{$admin -> id ==$product->writer_id ? 'selected':'' }}>{{ $admin -> name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                @error('writer_id')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputOffer">Product Offer</label>
                                    <input type="text" name="offer" value="{{$product->offer}}" class="form-control" id="exampleInputOffer" placeholder="Enter Product Offer">
                                </div>
                                @error('offer')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputFile">File Photo</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="photo" value="{{$product->photo}}" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <div class="ml-2 col-sm-12">
                                        <img src="{{ asset('front/images/products')}}/{{$product -> photo}}" id="preview" class="img-thumbnail">
                                    </div>
                                </div>
                                @error('photo')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputglassesModel">File Glasses Model</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="glassesModel" value="{{$product->glassesModel}}" class="custom-file-input" id="exampleInputglassesModel">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                @error('glassesModel')
                                {{$message}}
                                @enderror
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
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

