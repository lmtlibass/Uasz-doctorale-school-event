<?php

namespace App\Http\Controllers\Responsable;

use App\Models\Appelle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppelleFormRequest;

class AppelleController extends Controller
{
    public function index(){
        $appelles =  Appelle::paginate(8);
        return view('responsable.appelle.index', compact('appelles'));
    }

    public function create(){
        return view('responsable.appelle.create');
    }

    public function store(AppelleFormRequest $request){

        $appell = Appelle::create([
            $request->validated(),
            'user_id' => auth()->user()->id,
        ]);
        
        return redirect()->route('responsable.appelle.index')->with('success', 'appelle à communication enrégistrer avec succées');
    }


    public function show(Appelle $appelle){
        return view('responsable.appelle.show', compact('appelle'));
    }


    public function edit(Appelle $appelle){
        return view('responsable.appelle.edit', compact('appelle'));
    }

    public function update(AppelleFormRequest $request, Appelle $appelle){
        $appelle->update($request->validated());
        return redirect()->route('responsable.appelle.index')->with('success', 'appelle à communication modifié avec succées');
    }

    public function destroy(Appelle $appelle){
        $appelle->delete();
        return redirect()->route('responsable.appelle.index')->with('success', 'appelle à communication supprimé avec succées');
    }

    


}
