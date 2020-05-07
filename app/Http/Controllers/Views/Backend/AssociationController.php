<?php

namespace App\Http\Controllers\Views\Backend;

use Auth;
use App\Models\User;
use App\Models\Association;
use App\Helpers\AssociationHelper;
use App\Traits\SlugTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AssociationController extends Controller
{
    use SlugTrait;

    public function index ()
    {
        $association  = Association::whereIsActive(true)->first();
        return view('admin.associations.create', compact('association'));
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
            return redirect()->back()
              ->withInput($request->all())
              ->withErrors(['validator' => 'Les champs Nom, Lieu & Email sont obligatoires']);

        $slug = $this->getUniqueSlug(strtolower($request->short_name), 'associations');

        $association = Association::whereNumber($numer)->first();
        $association->short_name   = $request->has('short_name') ? $request->short_name : $association->short_name;
        $association->long_name    = $request->has('long_name') ? $request->long_name : $association->long_name;
        $association->slug         = $request->has('slug') ? $slug : $association->slug;
        $association->location     = $request->has('location') ? $request->location : $association->location;
        $association->po_box       = $request->has('po_box') ? $request->po_box : $association->po_box;
        $association->phone_1      = $request->has('phone_1') ? $request->phone_1 : $association->phone_1;
        $association->phone_2      = $request->has('phone_2') ? $request->phone_2 : $association->phone_2;
        $association->email        = $request->has('email') ? $request->email : $association->email;
        $association->address      = $request->has('address') ? $request->address : $association->address;
        $association->logo         = $request->has('logo') ? $request->logo : $association->logo;
        $association->is_active    = $request->has('is_active') ? $request->is_active : $association->is_active;
        $association->presentation = $request->has('presentation') ? $request->presentation : $association->presentation;
        $association->update();

        return redirect()->back()->with('message', 'Association mise à jour avec succès');
    }

}
