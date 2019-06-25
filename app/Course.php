<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Course extends Model
{
    //

  protected  $fillable=[
        'course_code','course_name','credit_hours'
    ];
    protected $primaryKey = 'id';
    
}