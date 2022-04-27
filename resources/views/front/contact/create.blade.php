<x-backindc xmlns="http://www.w3.org/1999/html">
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
                        <form method="POST" action="{{ route('dashboard.contact.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Product Name</label>
                                    <input type="text" name="name" :value="old('name')" class="form-control" id="exampleInputTitle" placeholder="Enter name">
                                </div>
                                @error('name')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputDescribe">Product Description</label>
                                    <input type="email" name="email" :value="old('email')" class="form-control" id="exampleInputDescribe" placeholder="Enter Product email">
                                </div>
                                @error('describe')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputPrice">Product Price</label>
                                    <input type="text" name="phone" :value="old('phone')" class="form-control" id="exampleInputPrice" placeholder="Enter Product phone">
                                </div>
                                @error('price')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputPrice">Product Price</label>
                                    <input type="text" name="subject" :value="old('subject')" class="form-control" id="exampleInputPrice" placeholder="Enter Product subject">
                                </div>
                                @error('price')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputPrice">Product Price</label>
                                    <textarea name="message"class="form-control" >{{old('message')}}</textarea>

                                </div>
                                @error('price')
                                {{$message}}
                                @enderror


                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add New Product</button>
                                <a href="{{route('dashboard.contact.index')}}" class="btn btn-danger">Cancel</a>
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

