<?php

namespace App\Http\Controllers;

use App\Models\Soumission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SoumissionFormRequest;
use App\Models\Appelle;

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
        
        
        $data = [
            'title' => $request->validated('title'),
            'description' => $request->validated('description'),
            'status' => 0,
            'user_id' => 1,
            'appelle_id' => $request->input('appelle_id'),
            'pj' => $request->file('pj')->store('appelle-fichier', 'public'),
        ];

        if( $soumission->pj){
            Storage::disk('public')->delete($soumission->pj);
        }
        $soumission =  Soumission::create($data);

        
        return redirect()->back()->with('success', 'proposition enrégistrer avec succées');
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