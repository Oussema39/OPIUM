<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.contact.liste-contacts', [ 'contacts' => \App\Models\Contact::all() ]);
    }

    public function destroy(Contact $contact) {
        $contact->delete();
        return redirect('/contact');
    }

    public function addMessage(){
        $data = request()->validate([
            'nom' =>'required',
            'email' =>'required',
            'message' =>'required',
        ]);

        dd($data);

        // \App\Models\Contact::create([
        //     'nom' => $data['nom'],
        //     'email' => $data['email'],
        //     'message' => $data['message'],
        // ]);

        // return redirect('/contact');

    }


}
