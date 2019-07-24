<?php

namespace App\Http\Controllers\Views\Backend;

use Auth;
use App\Models\User;
use App\Models\Association;
use App\Helpers\AssociationHelper;
use App\Traits\SlugTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssociationController extends Controller
{
    use SlugTrait;

    public function index ()
    {
        $associations  = Association::whereIsActive(true)->first();
        return view('backend.associations.index', compact('associations'));
    }

    public function create ()
    {
        return view('backend.associations.create');
    }

    public function edit ($number)
    {
        $association  = Association::whereIsActive(true)
                        ->whereNumber($number)->first();
        return view('backend.associations.edit', compact('association'));
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
            'short_name' => 'required',
            'location' => 'required',
            'email' => 'required'
        ]);

        if ($validator->fails())
            return redirect()->back()->withErrors(['validator' => 'Les champs Nom, Lieu & Email sont obligatoires']);

        $slug = $this->getUniqueSlug(strtolower($request->short_name), 'associations');

        Association::create([
          'number'       => AssociationHelper::makeAssociationNumber(),
          'short_name'   => $request->short_name,
          'long_name'    => $request->long_name,
          'slug'         => $slug,
          'location'     => $request->location,
          'po_box'       => $request->po_box,
          'phone_1'      => $request->phone_1,
          'phone_2'      => $request->phone_2,
          'email'        => $request->email,
          'address'      => $request->address,
          'logo'         => $request->logo,
          'presentation' => $request->presentation
        ]);

        return redirect()->back()->with('message', 'Association ajoutée avec succès');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $numer)
    {
        $validator = Validator::make($request->all(), [
            'short_name' => 'required',
            'location' => 'required',
            'email' => 'required'
        ]);

        if ($validator->fails())
            return redirect()->back()->withErrors(['validator' => 'Les champs Nom, Lieu & Email sont obligatoires']);

        $slug = $this->getUniqueSlug(strtolower($request->short_name), 'associations');

        $association = Association::whereNumber($numer)->first();
        $association->short_name   => $request->has('short_name') ? $request->short_name : $association->short_name;
        $association->long_name    => $request->has('long_name') ? $request->long_name : $association->long_name;
        $association->slug         => $request->has('slug') ? $slug : $association->slug;
        $association->location     => $request->has('location') ? $request->location : $association->location;
        $association->po_box       => $request->has('po_box') ? $request->po_box : $association->po_box;
        $association->phone_1      => $request->has('phone_1') ? $request->phone_1 : $association->phone_1;
        $association->phone_2      => $request->has('phone_2') ? $request->phone_2 : $association->phone_2;
        $association->email        => $request->has('email') ? $request->email : $association->email;
        $association->address      => $request->has('address') ? $request->address : $association->address;
        $association->logo         => $request->has('logo') ? $request->logo : $association->logo;
        $association->is_active    => $request->has('is_active') ? $request->is_active : $association->is_active;
        $association->presentation => $request->has('presentation') ? $request->presentation : $association->presentation;
        $association->update();

        return redirect()->back()->with('message', 'Association mise à jour avec succès');
    }

    public function desactivateOrActivate (Request $request, $number)
    {
        $association = Association::whereNumber($numer)->first();

        if (!$association)
            return return redirect()->back()->withErrors(['message' => 'Association non existante']);

        if ($association->is_active === 1) {
            $association->is_active = false
            $association->save();

            return redirect()->back()->with('message', 'Association désactivée');
        }

        if ($association->is_active === 0) {
            $association->is_active = true
            $association->save();

            return redirect()->back()->with('message', 'Association activée');
        }
    }

    public function destroy ($id)
    {
        $user = User::whereIsActive(true)->whereAssociationId($id)->first();

        if ($user)
            return return redirect()->back()->withErrors(['message' => 'Cette association à des membres actifs']);

        Association::find($id)->delete();
        return redirect()->back()->with('message', 'Association supprimée');
    }

}
