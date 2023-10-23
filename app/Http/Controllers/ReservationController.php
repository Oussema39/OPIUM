<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.reservation.liste-reservations', ['reservations' => \App\Models\Reservation::all()]);
    }

    public function create(){

        return view('admin.reservation.creation-reservation',[ 'evenements' => \App\Models\Evenement::all() ]);

    }

    public function destroy(Reservation $reservation) {
        
        $reservation->delete();
        return redirect('/reservation');

    }

    public function add(){
        $data = request()->validate([
            'nom_prenom' =>'required',
            'nbr_gar' =>'required',
            'nbr_fille' =>'required',
            'tel' =>'required',
            'evenement' => 'required',
        ]);

        $data['date'] = \App\Models\Evenement::where('id',$data['evenement'])->pluck('date')[0];

        \App\Models\Reservation::create([
            'nom_prenom' => $data['nom_prenom'],
            'nbr_garcon' => $data['nbr_gar'],
            'nbr_fille' => $data['nbr_fille'],
            'telephone' => $data['tel'],
            'id_evenement' => $data['evenement'],
            'date' => $data['date'],
        ]);

        return redirect('/reservation/create');

    }

    public function getUpdate(Reservation $reservation){
        return view('admin.reservation.modifier-reservation', compact('reservation'));
    }

    public function update(Reservation $reservation){

        $data = request()->validate([
            'nom' =>'required',
            'date' =>'required',
            'heure' =>'required',
            'description' =>'',
        ]);


        $reservation->update([
            'nom' => $data['nom'],
            'photo' => $path,
            'date' => $data['date'],
            'heure' => $data['heure'],
            'description' => $data['description'],
        ]);

        return redirect('/reservation');


    }
}
