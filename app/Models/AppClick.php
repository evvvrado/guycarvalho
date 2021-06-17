<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppClick extends Model
{
    use HasFactory;

    public function element(){
        return $this->belongsTo(AppElemento::class, "elemento_id", "id");
    }
}
