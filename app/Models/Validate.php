<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Validate extends Model
{
    protected $table = 'validations';

    protected $fillable =
        [
            'name',
            'occassion'
        ];
    //Mass assignable fields
}
