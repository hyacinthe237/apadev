<?php

namespace App\Http\Controllers\Views\Backend;

use Auth;
use App\Models\User;
use App\Models\Association;
use App\Models\Role;
use App\Helpers\UserHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
      $role = null;
      if ( $request->has('role') && $request->role != '' ) {
          $role = Role::where('name', $request->role)->first();
      }

      $keywords = $request->keywords;
      $users = User::when($keywords, function($query) use ($keywords) {
          return $query->where('firstname', 'like', '%'.$keywords.'%')
          ->orWhere('lastname', 'like', '%'.$keywords.'%');
      })
      ->when($role, function($query) use ($role) {
          return $query->where('role_id', $role->id);
      })
      ->orderBy('id', 'desc')
      ->paginate(50);

      $roles = Role::all();
      return view('admin.users.index', compact('users', 'roles'));
  }

    public function create ()
    {
        $roles = Role::get();

        return view('admin.users.create', compact('roles'));
    }

    public function edit ($number)
    {
        $user  = User::whereIsActive(true)->whereNumber($number)->first();

        if (!$user)
            return redirect()->route('users.index');

        $roles = Role::get();
        return view('admin.users.edit', compact('roles', 'user'));
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
            'firstname' => 'required',
            'email' => 'required',
            'cni' => 'required'
        ]);

        if ($validator->fails())
            return redirect()->back()->withErrors(['validator' => 'Les champs Prénom, CNI & Email sont obligatoires']);

        $association  = Association::whereIsActive(true)->first();

        User::create([
          'association_id' => $association->id,
          'number'      => UserHelper::makeUserNumber(),
          'firstname'   => $request->firstname,
          'lastname'    => $request->lastname,
          'phone'       => $request->phone,
          'email'       => $request->email,
          'password'    => $request->password,
          'fonction'    => $request->fonction,
          'profession'  => $request->profession,
          'cni'         => $request->cni,
          'sex'         => $request->sex,
          'dob'         => $request->dob,
          'is_active'   => $request->is_active,
          'address'     => $request->address,
          'photo'       => $request->photo,
          'description' => $request->description
        ]);

        return redirect()->back()->with('message', 'Membre ajouté avec succès');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $number)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required',
            'email' => 'required',
            'cni' => 'required'
        ]);

        if ($validator->fails())
            return redirect()->back()->withErrors(['validator' => 'Les champs Prénom, CNI & Email sont obligatoires']);

        $user = User::whereNumber($number)->whereIsActive(true)->first();
        if (!$user)
            return redirect()->back()->withErrors(['user' => 'Utilisateur inconnu!']);

        $user->association_id   = $request->has('association_id') ? $request->association_id : $user->association_id;
        $user->firstname   = $request->has('firstname') ? $request->firstname : $user->firstname;
        $user->lastname    = $request->has('lastname') ? $request->lastname : $user->lastname;
        $user->phone       = $request->has('phone') ? $request->phone : $user->phone;
        $user->email       = $request->has('email') ? $request->email : $user->email;
        $user->fonction    = $request->has('fonction') ? $request->fonction : $user->fonction;
        $user->profession  = $request->has('profession') ? $request->profession : $user->profession;
        $user->cni         = $request->has('cni') ? $request->cni : $user->cni;
        $user->sex         = $request->has('sex') ? $request->sex : $user->sex;
        $user->dob         = $request->has('dob') ? $request->dob : $user->dob;
        $user->is_active   = $request->has('is_active') ? $request->is_active : $user->is_active;
        $user->address     = $request->has('address') ? $request->address : $user->address;
        $user->photo       = $request->has('photo') ? $request->photo : $user->photo;
        $user->description = $request->has('description') ? $request->description : $user->description;
        $user->update();

        return redirect()->back()->with('message', 'Utilisateur mis à jour avec succès');
    }

    public function desactivateOrActivate (Request $request, $number)
    {
        $user = User::whereNumber($numer)->first();

        if (!$user)
            return redirect()->back()->withErrors(['message' => 'Utilisateur non existant']);

        if ($user->is_active === 1) {
            $user->is_active = false;
            $user->save();

            return redirect()->back()->with('message', 'Utilisateur désactivé');
        }

        if ($user->is_active === 0) {
            $user->is_active = true;
            $user->save();

            return redirect()->back()->with('message', 'Utilisateur activé');
        }
    }

    public function destroy ($id)
    {
        $user = User::whereIsActive(true)->whereId($id)->first();
        if (!$user)
            return redirect()->back()->withErrors(['message' => 'Utilisateur non existant']);

        $user->delete();
        return redirect()->back()->with('message', 'Utilisateur supprimé');
    }

}
