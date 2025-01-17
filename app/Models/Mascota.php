<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'especie', 'raza', 'edad', 'dueno_id'];

    public function dueno() {
        return $this->belongsTo(Dueno::class);
    }

    public function visitas() {
        return $this->hasMany(Visita::class);
    }
}
