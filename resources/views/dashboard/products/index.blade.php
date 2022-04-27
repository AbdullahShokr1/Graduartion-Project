<x-backindc>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Products</h1>
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

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Products</h3>
                @if(session('success'))
                    <div class="alert alert-success" role="alert">{{session('success')}}</div>
                @endif
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <a href="{{route('dashboard.products.create')}}"  class="btn btn-block bg-gradient-warning">
                        Add New Product
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Photo
                        </th>
                        <th>
                            Name
                        </th>
                        <th style="width: 30%">
                            Product Description
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            Writer
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>
                                {{$product->id}}
                            </td>
                            <td>
                                <img alt="Avatar" class="table-avatar" src="{{asset('front/images/products/'.$product->photo)}}">
                            </td>
                            <td>
                                {{$product->title}}
                            </td>
                            <td class="project_progress">
                                {{$product->describe}}
                            </td>
                            <td>
                                {{$product->price}}
                            </td>
                            <td>
                                @foreach($admins->where('id', $product->writer_id) as $admin)
                                    {{$admin->name}}
                                @endforeach
                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{ route('dashboard.products.edit',$product->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" onclick="document.getElementById('product-del-{{$product->id}}').submit()">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                    <form action="{{route('dashboard.products.destroy',$product->id)}}" id='product-del-{{$product->id}}' method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </a>



                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
    </div>
</x-backindc>

