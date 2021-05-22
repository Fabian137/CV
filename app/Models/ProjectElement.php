<?php
namespace App\Models;

class ProjectElement{
    private $proyecto;
    public $description;
    public $img;

    public function setProject($project){
        $this->proyecto = $project;
    }
    public function getProject(){
        return $this->proyecto;
    }

}