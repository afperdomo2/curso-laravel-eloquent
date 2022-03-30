<?php

namespace App\Models;

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
}
