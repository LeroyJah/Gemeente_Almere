<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Validate extends Model
{
    protected $table = 'validations';

    //Mass assignable fields
    protected $fillable =
        [
            'name',
            'occassion',
            'amount'
        ];
}
