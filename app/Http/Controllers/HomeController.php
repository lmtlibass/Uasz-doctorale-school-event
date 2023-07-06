<?php

namespace App\Http\Controllers;

use App\Models\Appelle;
use App\Models\Evenement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $appelles  = Appelle::paginate(8);
        // $evenements =  Evenement::paginate(8);

        return view('home');
    }

    public function appelle()
    {
        $appelles  = Appelle::paginate(8);

        return view('home.appelle', compact('appelles'));
    }

    public function showAppelle($id)
    {
        $appelle = Appelle::findOrFail($id);

        return view('home.show-appelle', compact('appelle'));
    }

    public function evenement()
    {
        $evenements =  Evenement::paginate(8);

        return view('home.evenement', compact('evenements'));
    }

    public function showEvenement($id)
    {
        $evenement = Evenement::findOrFail($id);

        return view('home.show-evenement', compact('evenement'));
    }
}
