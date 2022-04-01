<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';
    protected $primaryKey = 'company_id';
    public $timestamps = false;

    public function companies() {
        return $this->hasMany(Project::class, 'company_id', 'company_id');
    }
}
