<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'persona';
    protected $fillable = ['user_id', 'nombres', 'apellidos', 'telefono', 'direccion', 'estado'];
    protected $dates = ['fecha_ini', 'fecha_fin' ];
}
