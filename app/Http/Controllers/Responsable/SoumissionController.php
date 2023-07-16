<?php

namespace App\Http\Controllers\Responsable;

use App\Models\Appelle;
use App\Models\Soumission;
use Illuminate\Http\Request;
use App\Mail\PropositionMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

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

    public function accepter(Soumission $soumission)
    {
        $soumission->update([
            'status' => '1'
        ]);
        return redirect()->back()->with('success', 'La proposition de communication a été accepter avec succées');
    }

    public function refuser(Soumission $soumission)
    {
        $soumission->update([
            'status' => '0'
        ]);
        return redirect()->back()->with('success', 'La proposition de communication a été refuser avec succées');
    }

    public function sendMail(Request $request)
    {
        
        $request->validate([
            // 'email' => 'required|email',
            // 'object' => 'required',
            'message' => 'required',
            'pj' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        $data = [
            'email' => $request->email,
            'message' => $request->message,
            'pj' => $request->file('pj')->store('mail-fichier', 'public'),
        ];
        
        Mail::to($data['email'])->send(new PropositionMail($data));

        
        return redirect()->back()->with('success', 'Votre message a été envoyer avec succées');
    }
}
