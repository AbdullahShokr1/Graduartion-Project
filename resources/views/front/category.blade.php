<x-homea title="Category">
    <!--start content-->
    <div class="container-fluid text-center bg-light" style="margin-top: 6rem;">
        <div class="d-flex align-items-center justify-content-center">
            <div class="pt-3">
                <h4>Blog</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('blog')}}">Blog</a></li>
                        <li class="breadcrumb-item"><a >Category</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!--# Start The Content-->
    <!--# Start Post Content-->
    <section id='post-content'>
        <section class="my-title">
            <h1></h1>
        </section>
        <section id='Categories-Page' class='py-5'>
            <section class="container">
                <section class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
                    @foreach($categories as $category)
                        <section class="col">
                            <section class="card text-dark bg-light m-auto" >
                                <a class="card-header text-center" href="{{route('category.page',$category->slug)}}">{{$category->title}}</a>
                                <section class="card-body">
                                    <ul class="list-group">
                                        @foreach($category->post as $post)
                                            <li class="list-group-item" ><a href="{{route('post',$post->slug)}}">{{$post->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </section>
                            </section>
                        </section>
                    @endforeach
                </section>
            </section>
        </section>
    </section>
    <!--# End Post Content-->
    <!--# End The Content-->
    <!--end content-->
</x-homea>

