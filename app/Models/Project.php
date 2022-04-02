<?php

namespace App\Models;

use App\Scopes\ActiveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    //const CREATED_AT = 'creation_date'; // En caso de que los campos se llamen diferente
    //const UPDATED_AT = 'last_update';
    protected $table = 'projects';
    protected $primaryKey = 'project_id';
    //protected $keyType = 'string'; // Si la Pkey es de tipo diferente a integer
    //public $incrementing = false; // Si se quiere desactivar el autoincremento de la Pkey

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function company() {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function city() {
        return $this->belongsTo(City::class, 'city_id');
    }

     /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new ActiveScope);
    }
}
