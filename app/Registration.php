<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'primer_apellido', 'segundo_apellido', 'centro', 'ciudad', 'cargo', 'email', 'telefono', 'telefono_secundario'];
}
