<?php

namespace App\Http\Controllers\Views\Backend;

use Auth;
use App\Models\Association;
use App\Models\Edition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class EditionController extends Controller
{
    public function index ()
    {
        $editions  = Edition::get();
        return view('backend.editions.index', compact('editions'));
    }

    public function create ()
    {
        return view('backend.editions.create');
    }

    public function edit ($id)
    {
        $edition  = Edition::find($id);
        return view('backend.editions.edit', compact('edition'));
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
            'year' => 'required'
        ]);

        if ($validator->fails())
            return redirect()->back()->withErrors(['validator' => 'Le champ Année est obligatoire']);

        $association = Association::whereIsActive(true)->first();

        Edition::create([
          'association_id'  => $association->id,
          'year'            => $request->year,
          'proces_verbal'   => $request->proces_verbal
        ]);

        return redirect()->back()->with('message', 'Edition ajoutée avec succès');
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
            'year' => 'required'
        ]);

        if ($validator->fails())
            return redirect()->back()->withErrors(['validator' => 'Le champ Année est obligatoire']);

        $edition = Edition::find($id);
        $edition->association_id => $request->has('association_id') ? $request->association_id : $edition->association_id;
        $edition->year           => $request->has('year') ? $request->year : $edition->year;
        $edition->proces_verbal  => $request->has('proces_verbal') ? $request->proces_verbal : $edition->proces_verbal;
        $edition->update();

        return redirect()->back()->with('message', 'Edition mise à jour avec succès');
    }

    public function destroy ($id)
    {
        $edition = Edition::find($id);

        if (!$edition)
            return return redirect()->back()->withErrors(['message' => 'Edition non existante']);

        $edition->delete();
        return redirect()->back()->with('message', 'Edition supprimée');
    }

}
