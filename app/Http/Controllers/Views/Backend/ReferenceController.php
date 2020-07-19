<?php

namespace App\Http\Controllers\Views\Backend;

use Auth;
use App\Models\Association;
use App\Models\Reference;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ReferenceController extends Controller
{
    public function index (Request $request)
    {
        $keywords = $request->keywords;
        $references  = Reference::when($keywords, function($query) use ($keywords) {
            return $query->where('title', 'like', '%'.$keywords.'%')
            ->orWhere('year', 'like', '%'.$keywords.'%')
            ->orWhere('description', 'like', '%'.$keywords.'%')
            ->orWhere('location', 'like', '%'.$keywords.'%')
            ->orWhere('commanditaires', 'like', '%'.$keywords.'%');
        })
        ->orderBy('id', 'desc')
        ->paginate(20);

        return view('admin.references.index', compact('references'));
    }

    public function create ()
    {
        return view('admin.references.create');
    }

    public function edit ($id)
    {
        $reference  = Reference::find($id);
        return view('admin.references.edit', compact('reference'));
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

        Reference::create([
          'association_id'  => $association->id,
          'title'           => $request->title,
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

        $reference = Reference::find($id);

        // $reference->association_id  = $request->has('association_id') ? $request->association_id : $reference->association_id;
        $reference->title           = $request->has('title') ? $request->title : $reference->title;
        $reference->location        = $request->has('location') ? $request->location : $reference->location;
        $reference->year            = $request->has('year') ? $request->year : $reference->year;
        $reference->description     = $request->has('description') ? $request->description : $reference->description;
        $reference->commanditaires  = $request->has('commanditaires') ? $request->commanditaires : $reference->commanditaires;
        $reference->update();

        return redirect()->back()->with('message', 'Référence mise à jour avec succès');
    }

    public function destroy ($id)
    {
        $reference = Reference::find($id);

        if (!$reference)
            return redirect()->back()->withErrors(['message' => 'Référence non existante']);

        $reference->delete();
        return redirect()->back()->with('message', 'Référence supprimée');
    }

}
