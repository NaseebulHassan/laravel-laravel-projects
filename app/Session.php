<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    public function Enrollment(){
        return $this->hasMany('\App\Enrollment');
    }
    public function studentinfo(){
        return $this->hasMany('\App\studentinfo');
    }
}
