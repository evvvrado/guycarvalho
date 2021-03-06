<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    public function cursos_ligados(){
        return $this->hasMany(EventoCurso::class);
    }

    public function participantes(){
        return $this->hasMany(EventoParticipante::class);
    }

    public function hoteis(){
        return $this->hasMany(EventoHotel::class);
    }

    public function pacotes(){
        return $this->hasMany(Curso::class);
    }
}
