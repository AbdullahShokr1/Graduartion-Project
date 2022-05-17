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

    <div class="container mt-5 mb-5 ">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-8 mt-5 mلا-5">
                    <div class="card shadow">
                        <img src="img/istockphoto-1322879438-612x612.jpg" class="card-img-top border" alt="..." height="480">
                        <a href="#" class="blog_item_date bg-info text-decoration-none">
                            <h3>13</h3>
                            <p>Mar</p>
                        </a>
                        <div class="card-body ">
                            <a class="d-inline-block text-decoration-none" href="post.html">
                                <h3 class="blog-head">- Top New Trends in Suburban High Fashion</h3>
                            </a>
                            <p class="card-text">That dominion stars lights dominion divide years for fourth have don't
                                stars is that he earth it first without heaven in place seed it second morning saying..</p>
                        </div>
                    </div>
                </div>
            @endforeach
                <div class="col-md-3 mt-5 ml-5">
                    <div class="mb-4 ml-4">
                        <h4>Category </h4>
                    </div>
                    <div class="list-group">
                        @foreach($categories as $category)
                            <a href="#" class="list-group-item list-group-item-action">{{$category->title}}</a>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>
    <!--end content-->
</x-homea>
