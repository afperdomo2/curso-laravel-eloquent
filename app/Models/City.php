<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';
    protected $primaryKey = 'city_id';
    public $timestamps = false;

    public function cities() {
        return $this->hasMany(Project::class, 'city_id', 'city_id');
    }
}
