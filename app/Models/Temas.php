<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Temas;

class Temas extends Model
{
    protected $table = "temas";
    protected $primaryKey = "id";
    protected $fillable = [
        'nombre',
        'descripcion'
    ];
}
