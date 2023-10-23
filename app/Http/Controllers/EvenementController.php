<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;

class EvenementController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.evenement.liste-evenements', [ 'evenements' => \App\Models\Evenement::all() ]);
    }

    public function create(){

        return view('admin.evenement.creation-evenement');

    }

    public function destroy(Evenement $evenement) {
        
        $evenement->delete();
        return redirect('/evenement');

    }

    public function add(){
        $data = request()->validate([
            'nom' =>'required',
            'photo' => ['required', 'image'],
            'date' =>'required',
            'heure' =>'required',
            'description' =>'',
        ]);

        request()->file('photo')->move(
            public_path('storage/imgs'),
            request()->file('photo')->getClientOriginalName()
        );

        // $photo = request()->photo;

        // dd(request()->hasFile('photo'));
        // dd($photo);

        \App\Models\Evenement::create([
            'nom' => $data['nom'],
            'photo' => $data['photo']->getClientOriginalName(),
            'date' => $data['date'],
            'heure' => $data['heure'],
            'description' => $data['description'],
        ]);

        return redirect('/evenement/create');

    }

    public function getUpdate(Evenement $evenement){
        return view('admin.evenement.modifier-evenement', compact('evenement'));
    }

    public function update(Evenement $evenement){

        $data = request()->validate([
            'nom' =>'required',
            'date' =>'required',
            'heure' =>'required',
            'description' =>'',
        ]);

        $path = '';
        if (request()->hasFile('photo')){
            request()->file('photo')->move(
                public_path('storage/imgs'),
                request()->file('photo')->getClientOriginalName()
            );
            $path = request()->file('photo')->getClientOriginalName();
        }else{
            $path = $evenement->photo;
        }


        $evenement->update([
            'nom' => $data['nom'],
            'photo' => $path,
            'date' => $data['date'],
            'heure' => $data['heure'],
            'description' => $data['description'],
        ]);

        return redirect('/evenement');


    }

}
