<x-homea title="Blog-{{$post->title}}">
    <!--start content-->
    <!--# Start Post Content-->
    <div class="container-fluid text-center bg-light" style="margin-top: 6rem;">
        <div class="d-flex align-items-center justify-content-center">
            <div class="pt-3">
                <h4>Blog</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('blog')}}">Blog</a></li>
                        <li class="breadcrumb-item"><a>post</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-3 ">
        <div class="row">
            <div class="col-md-12">

                <div class="card shadow">
                    <img src="{{asset('front/images/posts/'.$post->photo)}}" class="card-img-top border" alt="..."
                         height="480">
                    <a href="#" class="blog_item_date bg-info text-decoration-none"><h3>{{$post->updated_at->diffForHumans()}}</h3>  </a>
                </div>
                <div class="card-body" style="line-height: 2;">
                    <h3 class="text-info text-center">{{$post->title}}</h3>
                    <p class="card-text">{{$post->mycontent}}</p>
                </div>
            </div>
        </div>
    </div>
    <!--# End Post Content-->
    <!--end content-->
</x-homea>
