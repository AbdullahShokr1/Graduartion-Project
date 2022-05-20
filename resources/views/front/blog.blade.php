<x-homea title="Blog">
    <!--start content-->
    <div class="container-fluid text-center bg-light" style="margin-top: 6rem;">
        <div class="d-flex align-items-center justify-content-center">
            <div class="pt-3">
                <h4>Blog</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a >Blog</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        @isset($post)
            <div class="row">

                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="{{route('post',$post->slug)}}"><img class="card-img-top" src="{{asset('front/images/posts/'.$post->photo)}}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{$post->updated_at->diffForHumans()}}</div>
                            <h2 class="card-title">{{$post->title}}</h2>
                            <p class="card-text">{{\Illuminate\Support\Str::limit($post->description, 60, '.....')}}</p>
                            <a class="btn btn-primary" href="{{route('post',$post->slug)}}">Read more →</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">

                        @foreach($posts as $post)
                            <div class="col-lg-6">
                                <!-- Blog post-->
                                <div class="card mb-4">
                                    <a href="{{route('post',$post->slug)}}"><img class="card-img-top" src="{{asset('front/images/posts/'.$post->photo)}}" alt="..." /></a>
                                    <div class="card-body">
                                        <div class="small text-muted">{{$post->updated_at->diffForHumans()}}</div>
                                        <h2 class="card-title h4">{{$post->title}}</h2>
                                        <p class="card-text">{{\Illuminate\Support\Str::limit($post->description, 60, '.....')}}</p>
                                        <a class="btn btn-primary" href="{{route('post',$post->slug)}}">Read more →</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <a class="card-header" href="{{route('category')}}">Categories</a>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        @foreach($categories as $category)
                                            <li><a href="{{route('category.page',$category->slug)}}" >{{$category->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endisset

    </div>
    <!--end content-->
</x-homea>
