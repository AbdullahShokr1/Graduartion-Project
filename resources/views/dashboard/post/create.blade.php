<x-backindc>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Post</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Posts</li>
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
                            <h3 class="card-title">Add Post</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('dashboard.post.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Title</label>
                                    <input type="text" name="title" value="{{old('title')}}"  class="form-control" id="exampleInputTitle" placeholder="Enter title">
                                </div>
                                @error('title')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputDescription">Description</label>
                                    <input type="text" name="description" value="{{old('description')}}" class="form-control" id="exampleInputDescription" placeholder="Enter description">
                                </div>
                                @error('description')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputKeywords">keywords</label>
                                    <input type="text" name="keywords" value="{{old('keywords')}}" class="form-control" id="exampleInputKeywords" placeholder="keywords">
                                </div>
                                @error('keywords')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="mycontent">Content</label>
                                   <textarea rows="6" cols="4" name="mycontent" id="mycontent" class="form-control" placeholder="content">{{old('mycontent')}}</textarea>
                                </div>
                                @error('content')
                                {{$message}}
                                @enderror
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" name='slug' value="{{old('slug')}}" id="slug" placeholder="Enter Slug">
                                    <small id="slugHelp" class="form-text text-muted">The Slug shoude be small Letter && less than 50 Letter</small>
                                    @error('slug')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select id="category_id" name="category_id">
                                        @foreach ( $categories as $category)
                                            <option value="{{ $category -> id}}">{{ $category -> title}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="writer_id">Writer</label>
                                    <select id="writer_id" name="writer_id">
                                        @foreach ( $admins as $admin)
                                            <option value="{{ $admin -> id}}">{{ $admin -> name}}</option>
                                        @endforeach
                                    </select>
                                    @error('writer_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

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
                                <button type="submit" class="btn btn-primary">Add Post</button>
                                <a href="{{route('dashboard.post.index')}}" class="btn btn-danger">Cancel</a>
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

