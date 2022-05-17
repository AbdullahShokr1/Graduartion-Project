<x-homea title="Category-{{$slug}}">
    <!--start content-->
    <div class="container-fluid text-center bg-light" style="margin-top: 6rem;">
        <div class="d-flex align-items-center justify-content-center">
            <div class="pt-3">
                <h4>Blog</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('category')}}">Category</a></li>
                        <li class="breadcrumb-item"><a >Posts</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <!-- Blog post-->
                @foreach($posts as $post)
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{asset('front/images/posts/'.$post->photo)}}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{$post->updated_at->diffForHumans()}}</div>
                            <h2 class="card-title h4">{{$post->title}}</h2>
                            <p class="card-text">{{\Illuminate\Support\Str::limit($post->description, 60, '.....')}}</p>
                            <a class="btn btn-primary" href="{{route('post',$post->slug)}}">Read more →</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    <!--end content-->
</x-homea>
