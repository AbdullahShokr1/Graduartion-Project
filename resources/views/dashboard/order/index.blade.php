<x-backindc>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Orders</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Orders</li>
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
                <h3 class="card-title">{{$orders->count()}} Orders</h3>
                @if(session('success'))
                    <div class="alert alert-success" role="alert">{{session('success')}}</div>
                @endif
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Phone
                        </th>
                        <th>
                            Subject
                        </th>
                        <th style="width: 40%">
                            Message
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td style="width: 1%">
                                {{$order->id}}
                            </td>
                            <td style="width: 10%">
                                {{$order->first_name}}
                            </td>
                            <td style="width: 10%">
                                {{$order->last_name}}
                            </td>
                            <td style="width: 1%">
                                {{$order->email}}
                            </td>
                            <td style="width: 10%">
                                {{$order->phone}}
                            </td>
                            <td style="width: 10%">
                                {{$order->city}}
                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-danger btn-sm" onclick="document.getElementById('contact-del-{{$order->id}}').submit()">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                    <form action="{{route('dashboard.order-del',$order->id)}}" id='contact-del-{{$order->id}}' method="post">
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
                    {{ $orders->links('vendor.pagination.custom') }}
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
    </div>
</x-backindc>

