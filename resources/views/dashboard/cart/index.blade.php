<x-backindc>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Shopping Cart</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Shopping Cart</li>
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
                <h3 class="card-title">{{$carts->count()}} Product in Cart from Users</h3>
                @if(session('success'))
                    <div class="alert alert-success" role="alert">{{session('success')}}</div>
                @endif
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <a class="btn btn-danger btn-sm" href="{{route('dashboard.cart.deleteall')}}"><i class="fas fa-trash"></i> Delete All</a>
                </div>
            </div>

            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th>
                            Product Photo
                        </th>
                        <th>
                            Name of Product
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            Name of User
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($carts as $cart)
                        <tr>
                            <td style="width: 1%">
                                {{$cart->id}}
                            </td>
                            <td>
                                <img alt="Avatar" class="table-avatar" src="{{asset('front/images/products/'.$cart->producut->photo)}}">
                            </td>
                            <td>
                                {{$cart->producut->title}}
                            </td>
                            <td>
                                {{$cart->producut->price}}
                            </td>
                            <td>
                                {{$cart->User->name}}
                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-danger btn-sm" onclick="document.getElementById('contact-del-{{$cart->id}}').submit()">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                    <form action="{{route('dashboard.cart.delete',$cart->id)}}" id='contact-del-{{$cart->id}}' method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="mt-4 mypagination">
                    {{ $carts->links('vendor.pagination.custom') }}
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
    </div>
</x-backindc>

