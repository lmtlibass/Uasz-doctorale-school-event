<?php

namespace App\Http\Controllers;

use App\Models\Soumission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SoumissionFormRequest;
use App\Models\Appelle;
use Illuminate\Support\Facades\Auth;

class SoumissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SoumissionFormRequest $request, Soumission $soumission)
    {
        $soumissions = Soumission::all();
        
        $data = [
            'title'         => $request->validated('title'),
            'description'   => $request->validated('description'),
            'status'        => null,
            'user_id'       => Auth::user()->id,
            'appelle_id'    => $request->input('appelle_id'),
            'pj'            => $request->file('pj')->store('appelle-fichier', 'public'),
        ];
        

        if( $soumission->pj){
            Storage::disk('public')->delete($soumission->pj);
        }

        foreach($soumissions as $soumission){
            if($soumission->user_id == Auth::user()->id && $soumission->appelle_id == $request->input('appelle_id')){
                return redirect()->back()->with('error', 'vous avez déjà soumis une proposition pour cet appel');
            }
        }

        $soumission =  Soumission::create($data);
        
        if($soumission){

            return redirect()->back()->with('success', 'proposition enrégistrer avec succées');
        }else {
            return redirect()->back()->with('error', 'proposition non enrégistrer');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
