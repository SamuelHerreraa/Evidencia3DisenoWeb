<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = ['nombreCarrera', 'descripcion'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    // Validaciones
    public static function rules()
    {
        return [
            'nombreCarrera' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ];
    }
}

