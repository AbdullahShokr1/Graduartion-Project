<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        return view("dashboard.post.index",[
            'posts' => Post::query()->latest()->paginate(15)
        ],
//            [
//            'categories'=> Category::get(),
//        ]
        );
    }
    public function create()
    {
        return view('dashboard.post.create',[
            'admins'=> Admin::get(),
            'categories'=> Category::get(),
        ]);
    }

    public function store(PostRequest $request)
    {
        if(($request -> photo) != Null ){
            $file_name = $this -> saveImages($request -> photo,'front/images/posts');

        }else{
            $file_name = "Post Photo";
        }
        $my_post = [
            'title' => $request -> title,
            'description' => $request -> description,
            'keywords' => $request -> keywords,
            'mycontent' => $request -> mycontent,
            'category_id' => $request -> category_id,
            'writer_id' => $request -> writer_id,
            'slug' => $request -> slug,
            'photo'=>$file_name,
        ];

        Post::create($my_post,$request->validated());

        return redirect()->route('dashboard.post.index')->with(['success'=>'Post Added Successfully']) ;
    }

    public function edit(Post $post)
    {
        return view('dashboard.post.update',[
            'admins'=> Admin::get(),
            'categories'=> Category::get(),

        ],compact('post'));
    }

    public function update(Post $post,PostRequest $request)
    {
        if(($request -> photo) != Null){
            $file_name = $this -> saveImages($request -> photo,'front/images/posts');
        }else{
            $file_name = $post -> photo;
        }
        $my_post = [
            'title' => $request -> title,
            'description' => $request -> description,
            'keywords' => $request -> keywords,
            'content' => $request -> contentt,
            'category_id' => $request -> category_id,
            'writer_id' => $request -> writer_id,
            'slug' => $request -> slug,
            'photo'=>$file_name,
        ];

        $post->update($my_post,$request->validated());

        return redirect()->route('dashboard.post.index')->with(['success'=>'Post Updated Successfully']) ;
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('dashboard.post.index')->with(['success'=>'Post Deleted Successfully']) ;
    }
    protected function saveImages($photo,$folder)
    {
        $file_ex = $photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_ex;
        $path = $folder;
        $photo->move($path, $file_name);
        return $file_name;
    }
}
