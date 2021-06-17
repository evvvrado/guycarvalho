<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppAcesso extends Model
{
    use HasFactory;

    public function clicks(){
        return $this->hasMany(AppClick::class, "acesso_id", "id");
    }

    public function visitante(){
        return $this->belongsTo(AppVisitante::class, "visitante_id", "id");
    }
}
