<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;
use App\Models\InscriptionUser;
use Illuminate\Support\Facades\Auth;

class InscriptionController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, int $evenement_id)
    {
        $data =[
            'evenement_id' => $evenement_id,
        ];
        $user_id = Auth::user()->id;


        $inscriptionUser = InscriptionUser::all();

        


        if($inscriptionUser){
            $user_exist = $inscriptionUser->where('user_id', '=', $user_id)->first();
            if ($user_exist) {
                return redirect()->route('evenement.show', $evenement_id)->with('error', 'Vous êtes déjà inscrit à cet évènement');
            }
        }

        $inscription = Inscription::create($data);


        $inscription->users()->attach($user_id);

        

        return redirect()->route('evenement.show', $evenement_id)->with('success', 'Votre inscription a été enregistrée avec succès');
    }

    
}
