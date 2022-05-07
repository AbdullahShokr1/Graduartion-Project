<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view("dashboard.about.index",[
            'abouts' => About::query()->latest()->paginate(15)
        ],
        );
    }
    public function create()
    {
        return view('dashboard.about.create',[
            'about'=> About::get(),
        ]);
    }

    public function store(AboutRequest $request)
    {
        if(($request -> photo) != Null){
            $file_name = $this -> saveImages($request -> photo,'front/images/about');
        }else{
            $file_name = "Post Photo";
        }
        $my_post = [
            'name' => $request -> name,
            'role' => $request -> role,
            'des' => $request -> des,
            'email'=> $request -> email,
            'photo'=>$file_name,
        ];

        About::create($my_post,$request->validated());

        return redirect()->route('dashboard.about.index')->with(['success'=>'Post Added Successfully']) ;
    }

    public function edit(About $about)
    {
        return view('dashboard.about.update',compact('about'));
    }

    public function update(About $about,AboutRequest $request)
    {
        if(($request -> photo) != Null){
            $file_name = $this -> saveImages($request -> photo,'front/images/posts');
        }else{
            $file_name = $about -> photo;
        }
        $my_post = [
            'name' => $request -> name,
            'role' => $request -> role,
            'des' => $request -> des,
            'email'=> $request -> email,
            'photo'=>$file_name,
        ];

        $about->update($my_post,$request->validated());

        return redirect()->route('dashboard.about.index')->with(['success'=>'Post Updated Successfully']) ;
    }
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('dashboard.about.index')->with(['success'=>'Post Deleted Successfully']) ;
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
