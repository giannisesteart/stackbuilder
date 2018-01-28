<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nini extends Model
{
    //
    
    protected $table = 'nini';
    
    function search($id){ 
       
       return (nini::find($id));
        
    }
    
    
}
