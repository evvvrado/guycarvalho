<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;

    public function elementos(){
        return $this->hasMany(AppElemento::class, "app_id", "id");
    }

    public function acessos(){
        return $this->hasMany(AppAcesso::class, "app_id", "id");
    }
}
