<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('dashboard.messages.index',[
                'contacts' => Contact::query()->paginate(10),
            ]);
    }
    public function show($id){
        $contact = Contact::select()->where('id',$id)->first();
        return view('dashboard.messages.show',compact('contact'));
        //return view('dashboard.messages.show');
    }

    public function create(){
        return view('front.contact.create');
    }
    //Store new Candidate in DB
    public function store(ContactRequest $request){
        Contact::create($request->validated());

        return redirect()->route('contact')->with(['success'=>'Message Added Successfully']) ;
    }
    public function destroy(Contact $contact,$id){
        $contact = Contact::select()->where('id',$id)->delete();
        return redirect()->route('dashboard.contact')->with(['success'=>'User Deleted Successfully']) ;
    }
}
