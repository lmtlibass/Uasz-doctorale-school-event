<?php

namespace App\Http\Controllers\Responsable;

use Carbon\Carbon;
use App\Models\Evenement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\EvenementFormRequest;

class EvenementController extends Controller
{
    /**
     * Retourne la liste des evenements publiés par un responsable.
     */
    public function index()
    {

        $evenements =  Evenement::where('evenements.user_id', '=', '1')->paginate(8);
        return view('responsable.evenement.index', compact('evenements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Evenement $evenement)
    {
        return view('responsable.evenement.form', compact('evenement'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EvenementFormRequest $request, Evenement $evenement)
    {
        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'media' => $request->file('media')->store('evenement-image', 'public'),
            'user_id' => Auth::user()->id,
        ];
        
        if ($evenement->image) {
            Storage::disk('public')->delete($evenement->image);
        }
       
        $evenement =  Evenement::create($data);
        
        return redirect()->route('responsable.evenement.index')->with('success', 'evenement à communication enrégistrer avec succées');
    }

    /**
     * Display the specified resource.
     */
    public function show(Evenement $evenement)
    {
        return view('responsable.evenement.show', compact('evenement'));
    }


    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Evenement $evenement)
    {
        
        return view('responsable.evenement.form', compact('evenement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EvenementFormRequest $request, Evenement $evenement)
    {
        $evenement->update($this->replaceImage($evenement, $request));
        return redirect()->route('responsable.evenement.index')->with('success', 'evenement à communication modifié avec succées');
    }
     /**
     * suppression du fichier avant de réenregistrer return array
     */

     private function replaceImage(Evenement $evenement, EvenementFormRequest $request): array
     {
         $data = $request->validated();
         $data['user_id'] = 1;
         
         $image = $request->validated('media');
         if ($evenement->media) {
             Storage::disk('public')->delete($evenement->media);
         }
         
         $data['media'] = $image->store('evenement-image', 'public');
        
         return $data;
        
     }
    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Evenement $evenement)
    {
        $evenement->delete();
        return redirect()->route('responsable.evenement.index')->with('success', 'evenement à communication supprimé avec succées');
    }
}
