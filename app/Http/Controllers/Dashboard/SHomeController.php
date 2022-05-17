<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShomeRequest;
use App\Models\SHome;
use Illuminate\Http\Request;

class SHomeController extends Controller
{
    public function index()
    {
        return view("dashboard.shome.index",[
            'shome' => SHome::query()->where('id',1)->first()
        ],
        );
    }

    public function edit()
    {
        return view('dashboard.shome.update',
            [
                'shome' => SHome::query()->where('id',1)->first()
            ],
        );
    }

    public function update(SHome $shome,ShomeRequest $request)
    {
        if(($request -> banner_photo && $request -> banner1_photo && $request -> logo) != Null){
            $logo = $this -> savelogo($request -> logo,'front/images/home');
            $file_name = $this -> saveImages($request -> banner_photo,'front/images/home');
            $file1_name = $this -> saveImages1($request -> banner1_photo,'front/images/home');
        }else{
            $logo= $shome -> logo;
            $file_name = $shome -> banner_photo;
            $file1_name = $shome -> banner1_photo;
        }
        $shome->query()->where('id',1)->first()->update([
            'logo'=> $logo,
            'banner'=> $request -> banner,
            'banner_description'=> $request -> banner_description,
            'banner_photo'=> $file_name,
            'banner1'=> $request -> banner1,
            'banner1_description'=> $request -> banner1_description,
            'banner1_photo'=> $file1_name,
            'social1'=> $request -> social1,
            'social2'=> $request -> social2,
            'social3'=> $request -> social3,
            'social4'=> $request -> social4,
        ],$request->validated());

        return redirect()->route('dashboard.home.index')->with(['success'=>'Post Updated Successfully']) ;
    }
    protected function saveImages($photo,$folder)
    {
        $file_ex = $photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_ex;
        $path = $folder;
        $photo->move($path, $file_name);
        return $file_name;
    }
    protected function saveImages1($photo,$folder)
    {
        $file_ex = $photo->getClientOriginalExtension();
        $file_name = time() . 'a.' . $file_ex;
        $path = $folder;
        $photo->move($path, $file_name);
        return $file_name;
    }
    protected function savelogo($photo,$folder)
    {
        $file_ex = $photo->getClientOriginalExtension();
        $file_name = time() . '-logo.' . $file_ex;
        $path = $folder;
        $photo->move($path, $file_name);
        return $file_name;
    }
}
