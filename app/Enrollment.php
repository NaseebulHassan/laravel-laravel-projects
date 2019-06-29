<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    //
    public function session(){
        return $this->belongsTo('\App\session');
    }
    public function studentinfo(){
        return $this->belongsTo('\App\studentinfo');
    }
    public function Course(){
        return $this->belongsTo('\App\Course');
    }
    public function instructor(){
        return $this->belongsTo('\App\instructor');
    }
}
