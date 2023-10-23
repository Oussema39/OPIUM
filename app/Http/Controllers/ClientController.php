<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function add(){

        $data = request()->validate([
            'nom_prenom' =>'required',
            'nbr_gar' =>'required',
            'nbr_fille' =>'required',
            'tel' =>'required',
            'evenement' => 'required',
            'date' => 'required',
            'id_event' => 'required',
        ]);

        \App\Models\Reservation::create([
            'nom_prenom' => $data['nom_prenom'],
            'nbr_garcon' => $data['nbr_gar'],
            'nbr_fille' => $data['nbr_fille'],
            'telephone' => $data['tel'],
            'id_evenement' => $data['id_event'],
            'date' => $data['date'],
        ]);

        return view('res_success');

    }

    public function addMessage(){
        $data = request()->validate([
            'nom' =>'required',
            'email' =>'required',
            'message' =>'required',
        ]);

        \App\Models\Contact::create([
            'nom' => $data['nom'],
            'email' => $data['email'],
            'message' => $data['message'],
        ]);

        return redirect('/');

    }
}
