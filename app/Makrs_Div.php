<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makrs_Div extends Model
{
    
    public function Offered_course(){
        return $this->hasMany('\App\Offered_course');
    }
}
