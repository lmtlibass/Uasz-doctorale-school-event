<?php

namespace App\Http\Controllers\Responsable;

use Carbon\Carbon;
use App\Models\Appelle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AppelleFormRequest;
use Illuminate\Support\Facades\Auth;

class AppelleController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Appelle::class, 'appelle');
    }


    /**
     * Retourne la liste des appelles publiés par un responsable.
     */
    public function index()
    {
        $appelles =  Appelle::where('appelles.user_id', '=', '1')->paginate(8);
        return view('responsable.appelle.index', compact('appelles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Appelle $appelle)
    {
        $this->authorize('create', $appelle);
        return view('responsable.appelle.form', compact('appelle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AppelleFormRequest $request, Appelle $appelle)
    {

        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $request->file('image')->store('appelles-image', 'public'),
            'pj' => $request->file('pj')->store('appelle-fichier', 'public'),
            'user_id' => Auth::user()->id,
        ];
        if ($appelle->image) {
            Storage::disk('public')->delete($appelle->image);
        }
        if ($appelle->pj) {

            Storage::disk('public')->delete($appelle->pj);
        }


        $appelle =  Appelle::create($data);

        return redirect()
            ->route('responsable.appelle.index')
            ->with('success', 'appelle à communication enrégistrer avec succées');
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
        $this->authorize('update', $appelle);
        return view('responsable.appelle.form', compact('appelle',));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(AppelleFormRequest $request, Appelle $appelle)
    {

        $this->authorize('update', $appelle);
        $appelle->update($this->replaceImage($appelle, $request));
        return redirect()
            ->route('responsable.appelle.index')
            ->with('success', 'appelle à communication modifié avec succées');
    }

    /**
     * suppression du fichier avant de réenregistrer return array
     */

    private function replaceImage(Appelle $appelle, AppelleFormRequest $request): array
    {
        $data = $request->validated();

        $image = $request->validated('image');
        $pj = $request->validated('pj');

        if ($appelle->image) {
            Storage::disk('public')->delete($appelle->image);
        }
        if ($appelle->pj) {
            Storage::disk('public')->delete($appelle->pj);
        }
        $data['image'] = $image->store('appelles-image', 'public');
        $data['pj'] = $pj->store('appelle-fichier', 'public');
        //  $date['user_id'] = 1;
        return $data;
    }
    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Appelle $appelle)
    {
        $this->authorize('destroy', $appelle);
        $appelle->delete();
        return redirect()
            ->route('responsable.appelle.index')
            ->with('success', 'appelle à communication supprimé avec succées');
    }
}
