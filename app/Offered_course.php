<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offered_course extends Model
{
    
    public function Degree(){
        return $this->belongsTo('\App\Degree');
    }
    public function Course(){
        return $this->belongsTo('\App\Course');
    }
    public function Marks_Div(){
        return $this->belongsTo('\App\Marks_Div');
    }
}
