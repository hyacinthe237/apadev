<?php

namespace App\Http\Controllers\Views\Backend;

use Auth;
use App\Models\Ressource;
use App\Models\Association;
use App\Traits\SlugTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RessourceController extends Controller
{
    use SlugTrait;

    public function index ()
    {
        $ressources  = Ressource::get();
        return view('backend.ressources.index', compact('ressources'));
    }

    public function create ()
    {
        return view('backend.ressources.create');
    }

    public function edit ($id)
    {
        $ressource  = Ressource::find($id);
        return view('backend.ressources.edit', compact('ressource'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails())
            return redirect()->back()->withErrors(['validator' => 'Le champ Nom est obligatoire']);

        $slug = $this->getUniqueSlug(strtolower($request->name), 'ressources');
        $association = Association::whereIsActive(true)->first();

        Ressource::create([
          'association_id'  => $association->id,
          'name'            => $request->name,
          'slug'            => $slug,
          'description'     => $request->description
        ]);

        return redirect()->back()->with('message', 'Ressource ajoutée avec succès');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails())
            return redirect()->back()->withErrors(['validator' => 'Le champ Nom est obligatoire']);

        $slug = $this->getUniqueSlug(strtolower($request->name), 'ressources');

        $ressource = Ressource::find($id);
        $ressource->association_id => $request->has('association_id') ? $request->association_id : $ressource->association_id;
        $ressource->name           => $request->has('name') ? $request->name : $ressource->name;
        $ressource->slug           => $request->has('slug') ? $slug : $ressource->slug;
        $ressource->description    => $request->has('description') ? $request->description : $ressource->description;
        $ressource->update();

        return redirect()->back()->with('message', 'Ressource mise à jour avec succès');
    }

    public function destroy ($id)
    {
        $ressource = Ressource::find($id);

        if (!$ressource)
            return return redirect()->back()->withErrors(['message' => 'Ressource non existante']);

        $ressource->delete();
        return redirect()->back()->with('message', 'Ressource supprimée');
    }

}
