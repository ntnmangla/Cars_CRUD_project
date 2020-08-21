<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\False_;

class CountryModel extends Model
{
    protected $table='_z_Country';
    public $timestamps=false;

    protected $fillable=[
        'iso',
        'name',
        'dname',
        'iso3',
        'position',
        'numcode',
        'phonecode',
        'created',
        'register_by',
        'modified',
        'modified_by',
    ];
}
