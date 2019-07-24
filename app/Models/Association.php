<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Association extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'associations';

    public function users () {
        return $this->hasMany(User::class);
    }

    public function ressources () {
        return $this->hasMany(Ressource::class);
    }

    public function editions () {
        return $this->hasMany(Edition::class);
    }

    public function references () {
        return $this->hasMany(Reference::class);
    }
}
