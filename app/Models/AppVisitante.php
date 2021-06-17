<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppVisitante extends Model
{
    use HasFactory;

    public function acessos(){
        return $this->hasMany(AppAcesso::class);
    }

    public function clicks(){
        return $this->hasMany(AppClick::class);
    }
}
