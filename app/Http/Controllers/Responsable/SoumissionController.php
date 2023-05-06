<?php

namespace App\Http\Controllers\Responsable;

use App\Models\Appelle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Soumission;

class SoumissionController extends Controller
{
    /**
     * Renvoie la liste des proposition de communication pour une appelle
     */
    public function getSoumission(Appelle $appelle)
    {
        $soumissions = Soumission::where('soumissions.appelle_id', '=', $appelle->id)->paginate(10);
        return view('responsable.appelle.soumission', compact('soumissions'));
    }

    public function showSoumission(Soumission $soumission)
    {
        return view('responsable.appelle.comunication', compact('soumission'));
    }
}