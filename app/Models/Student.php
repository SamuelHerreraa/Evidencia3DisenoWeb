<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Student extends Model
{
    protected $fillable = ['nombre', 'apellidos', 'fecha_nacimiento', 'carrera_id', 'estatus'];

    public function carrera()
    {
        return $this->belongsTo(Career::class);
    }

    // Validaciones
    public static function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'carrera_id' => 'required|exists:careers,id',
            'estatus' => ['required', Rule::in(['Inscrito', 'No Inscrito'])],
        ];
    }
}

