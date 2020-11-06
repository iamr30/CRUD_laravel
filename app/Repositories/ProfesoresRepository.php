<?php

namespace App\Repositories;

use App\Models\Profesores;
use App\Repositories\BaseRepository;

/**
 * Class ProfesoresRepository
 * @package App\Repositories
 * @version November 6, 2020, 6:31 pm UTC
*/

class ProfesoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'correo',
        'division',
        'reputacion'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Profesores::class;
    }
}
