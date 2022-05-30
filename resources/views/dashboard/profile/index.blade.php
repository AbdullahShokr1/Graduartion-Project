<x-backindc>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Admin Profile</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"  src="{{URL::asset('dashboardfile/images/admins/'.$info->photo)}}"  alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">{{$info->name}}</h3>

                                <p class="text-muted text-center">{{$info->email}}</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Products</b> <a class="float-right">{{$info->product->count()}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Posts</b> <a class="float-right">{{$info->post->count()}}</a>
                                    </li>
                                </ul>

{{--                                <a href="{{route('dashboard.admins.edit',$info->id)}}" class="btn btn-primary btn-block"><b>Edit information</b></a>--}}
                                <a href="{{route('dashboard.admin.profile.edit',$info->id)}}" class="btn btn-primary btn-block"><b>Edit information</b></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">About Me</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-book mr-1"></i>Name</strong>
                                <p class="text-muted">{{$info->name}}</p>
                                <hr>
                                <strong><i class="fas fa-book mr-1"></i>Email</strong>
                                <p class="text-muted">{{$info->email}} </p>
                                <hr>
                                @if(Auth::user('admin')->privileges == 0)
                                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                                    <p class="text-muted">This ِadmin has the right to access all powers, control completely, and modify all data on the site</p>
                                @elseif(Auth::user('admin')->privileges == 1)
                                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                                    <p class="text-muted">This Writer has the right to access some powers and control only to modify the blog on the site</p>
                                @else
                                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                                    <p class="text-muted">This marketer has the right to access some of the powers and control some of the existing data such as adding, modifying and deleting products, the cart and messages that come from customers and postal subscriptions to send offers and discounts to bring more customers on the site</p>
                                @endif
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</x-backindc>

