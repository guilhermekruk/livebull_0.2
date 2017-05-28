<?php

namespace livebull;

use Illuminate\Database\Eloquent\Model;

class CadAnimal extends Model
{
    protected $fillabel = [
        'CadAnimalId_PK',
        'CadTipoAnimalId_FK',
        'CadRacaId_FK',
        'CadEspId_FK',
        'CadAnimalIdenti',
        'CadAnimalDTreg',
        'CadAnimalDTnasc'
    ];
}
