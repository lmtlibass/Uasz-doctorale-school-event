<?php

namespace App\Http\Controllers\Responsable;

use App\Models\Evenement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Inscription;
use Illuminate\Support\Facades\Auth;

class ParticipantController extends Controller
{
    public function getPraticipant(int $id){

        $evenement = Evenement::find($id);
        $inscription = Inscription::where('evenement_id', '=', $evenement->id)->first();

    
        $participants = $inscription->users;

        return view('responsable.evenement.participant', compact('participants', 'evenement'));
        
    }
}
