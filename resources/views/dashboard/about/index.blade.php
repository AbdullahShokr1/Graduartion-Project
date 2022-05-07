<x-backindc>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>About Page Settings</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Home</a></li>
                            <li class="breadcrumb-item">Settings</li>
                            <li class="breadcrumb-item active">About Page</li>
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
                <h3 class="card-title">About Page Settings</h3>
                @if(session('success'))
                    <div class="alert alert-info" role="alert">
                        {{session('success')}}
                    </div>
                @endif
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <a href="{{route('dashboard.about.create')}}"  class="btn btn-block bg-gradient-warning">
                        Add Person
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 10%">
                            Photo
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Role
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Email
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($abouts as $about)
                        <tr>
                            <td>
                                <img alt="Avatar" class="table-avatar" src="{{asset('front/images/about/'.$about->photo)}}">
                            </td>
                            <td>
                                {{$about->name}}
                            </td>
                            <td>
                                {{$about->role}}
                            </td>
                            <td>
                                {{$about->des}}
                            </td>
                            <td>
                                {{$about->email}}
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{ route('dashboard.about.edit',$about->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" onclick="document.getElementById('user-del-{{$about->id}}').submit()">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                    <form action="{{route('dashboard.about.destroy',$about->id)}}" id='user-del-{{$about->id}}' method="post">
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

