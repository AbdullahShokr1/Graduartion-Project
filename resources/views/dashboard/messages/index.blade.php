<x-backindc>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Messages</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Messages</li>
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
                <h3 class="card-title">{{$contacts->count()}} Messages</h3>
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
                    @foreach($contacts as $contact)
                        <tr>
                            <td style="width: 1%">
                                {{$contact->id}}
                            </td>
                            <td style="width: 10%">
                                {{$contact->name}}
                            </td>
                            <td style="width: 10%">
                                {{$contact->email}}
                            </td>
                            <td class="project_progress">
                                {{$contact->phone}}
                            </td>
                            <td style="width: 20%">
                                {{$contact->subject}}
                            </td>
                            <td style="width: 20%">
                                {{\Illuminate\Support\Str::limit($contact->message, 30, '...')}}
                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="{{route('dashboard.show-message',$contact->id)}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-danger btn-sm" onclick="document.getElementById('contact-del-{{$contact->id}}').submit()">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                    <form action="{{route('dashboard.delete-contact',$contact->id)}}" id='contact-del-{{$contact->id}}' method="post">
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
                    {{ $contacts->links('vendor.pagination.custom') }}
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
    </div>
</x-backindc>

