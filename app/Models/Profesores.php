<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Profesores
 * @package App\Models
 * @version November 6, 2020, 6:31 pm UTC
 *
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property string $correo
 * @property string $division
 * @property integer $reputacion
 */
class Profesores extends Model
{
    use SoftDeletes;

    public $table = 'profesores';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'correo',
        'division',
        'reputacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'correo' => 'string',
        'division' => 'string',
        'reputacion' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido_paterno' => 'required',
        'apellido_materno' => 'required',
        'correo' => 'email',
        'division' => 'required',
        'reputacion' => 'numeric'
    ];

    
}
