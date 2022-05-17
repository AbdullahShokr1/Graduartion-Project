<x-backindc>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Reviews</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Review</li>
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
                <h3 class="card-title">Reviews</h3>
                @if(session('success'))
                    <div class="alert alert-info" role="alert">
                        {{session('success')}}
                    </div>
                @endif
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            id
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Review
                        </th>
                        <th>
                            comment
                        </th>
                        <th>
                            Product
                        </th>
                        <th>
                            Photo
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reviews as $review)
                        <tr>
                            <td>
                                {{$review->id}}
                            </td>
                            <td>
                                {{$review->User->name}}
                            </td>
                            <td>
                                {{$review->review}}
                            </td>
                            <td>
                                {{$review->comment}}
                            </td>
                            <td>
                                {{$review->product->title}}
                            </td>
                            <td>
                                <img alt="Avatar" class="table-avatar" src="{{asset('front/images/products/'.$review->product->photo)}}">
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-danger btn-sm" onclick="document.getElementById('review-del-{{$review->id}}').submit()">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                    <form action="{{route('dashboard.review.delete',$review->id)}}" id='review-del-{{$review->id}}' method="post">
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

