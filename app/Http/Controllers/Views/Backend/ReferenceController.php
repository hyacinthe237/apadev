<?php

namespace App\Http\Controllers\Views\Backend;

use Auth;
use App\Models\Association;
use App\Models\Reference;
use App\Traits\SlugTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReferenceController extends Controller
{
  use SlugTrait;

    public function index ()
    {
        $references  = Reference::get();
        return view('backend.references.index', compact('references'));
    }

    public function create ()
    {
        return view('backend.references.create');
    }

    public function edit ($id)
    {
        $reference  = Reference::find($id);
        return view('backend.references.edit', compact('reference'));
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
            'title' => 'required'
        ]);

        if ($validator->fails())
            return redirect()->back()->withErrors(['validator' => 'Le champ titre est obligatoire']);

        $association = Association::whereIsActive(true)->first();
        $slug = $this->getUniqueSlug(strtolower($request->title), 'references');

        Reference::create([
          'association_id'  => $association->id,
          'title'           => $request->title,
          'slug'            => $slug,
          'location'        => $request->location,
          'year'            => $request->year,
          'description'     => $request->description,
          'commanditaires'  => $request->commanditaires
        ]);

        return redirect()->back()->with('message', 'Référence ajoutée avec succès');
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
            'title' => 'required'
        ]);

        if ($validator->fails())
            return redirect()->back()->withErrors(['validator' => 'Le champ titre est obligatoire']);

        $slug = $this->getUniqueSlug(strtolower($request->title), 'references');
        $reference = Reference::find($id);

        $reference->association_id  => $request->has('association_id') ? $request->association_id : $reference->association_id;
        $reference->title           => $request->has('title') ? $request->title : $reference->title;
        $reference->slug            => $request->has('title') ? $slug : $reference->slug;
        $reference->location        => $request->has('location') ? $request->location : $reference->location;
        $reference->year            => $request->has('year') ? $request->year : $reference->year;
        $reference->description     => $request->has('description') ? $request->description : $reference->description;
        $reference->commanditaires  => $request->has('commanditaires') ? $request->commanditaires : $reference->commanditaires;
        $reference->update();

        return redirect()->back()->with('message', 'Référence mise à jour avec succès');
    }

    public function destroy ($id)
    {
        $reference = Reference::find($id);

        if (!$reference)
            return return redirect()->back()->withErrors(['message' => 'Référence non existante']);

        $reference->delete();
        return redirect()->back()->with('message', 'Référence supprimée');
    }

}
