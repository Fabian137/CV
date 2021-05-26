<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Project extends Model{
   protected $table = 'jobs';
    
    public function getConversion(){
        $years = floor($this->meses / 12);
        $modulo = $this->meses % 12;
        return "del proyecto: $years años $modulo meses";
    }
}