<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class instructor extends Model
{
    //
    protected  $fillable=[
        'fname',
        'lastname',
        'email',
        'cellno',
        'type',
        'department',
       'specialization',
        'department'
    ];
}
