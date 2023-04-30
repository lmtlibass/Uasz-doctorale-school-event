<?php

namespace App\Http\Controllers\Responsable;

use App\Models\Appelle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppelleFormRequest;

class AppelleController extends Controller
{
    /**
     * Retourne la liste des appelles publiés par un responsable.
     */
    public function index()
    {

        $appelles =  Appelle::paginate(8);
        return view('responsable.appelle.index', compact('appelles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Appelle $appelle)
    {
        return view('responsable.appelle.form', compact('appelle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AppelleFormRequest $request)
    {



        $image = $request->validated('image');
        $pj = $request->validated('pj');

        if ($image !== null && !$image->getError() || $pj !== null && !$pj->getError()) {
            $data['image'] = $image->store('appelles-image', 'public');
            $data['pj'] = $pj->store('appelle-fichier', 'public');
        }


        $data = $request->validated();
        $appelle = Appelle::create([
            'title'         => $data['title'],
            'description'   => $data['description'],
            'image'         => $data['image'],
            'pj'            => $data['pj'],
            'user_id'       => 1,
        ]);

        return redirect()->route('responsable.appelle.index')->with('success', 'appelle à communication enrégistrer avec succées');
    }

    /**
     * Display the specified resource.
     */
    public function show(Appelle $appelle)
    {
        return view('responsable.appelle.show', compact('appelle'));
    }


    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Appelle $appelle)
    {
        return view('responsable.appelle.form', compact('appelle'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(AppelleFormRequest $request, Appelle $appelle)
    {
        $appelle->update($request->validated());
        return redirect()->route('responsable.appelle.index')->with('success', 'appelle à communication modifié avec succées');
    }
    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Appelle $appelle)
    {
        $appelle->delete();
        return redirect()->route('responsable.appelle.index')->with('success', 'appelle à communication supprimé avec succées');
    }
}
