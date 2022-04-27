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
                'contacts' => Contact::latest()->get(),
            ]);
    }

    public function create(){
        return view('front.contact.create');
    }
    //Store new Candidate in DB
    public function store(ContactRequest $request){
        Contact::create($request->validated());

        return redirect()->route('dashboard.home')->with(['success'=>'Message Added Successfully']) ;
    }
    public function destroy(Contact $contact){
        $contact->delete();
        return redirect()->route('dashboard.contact.index')->with(['success'=>'Message Deleted Successfully']) ;
    }
}
