<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadual extends Model
{
    use HasFactory;

    public function diretorias(){
        return $this->hasMany(EstadualDiretoria::class);
    }
}
