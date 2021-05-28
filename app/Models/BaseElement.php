<?
namespace App\Models;

include_once 'Interfaz.php';

class BaseElement implements Interfaz{ 
    public $title;
    public $description;
    public $visible;
    public $meses;

    public function __construct($title,$description){
        $this->title = $title;
        $this->description = $description;
    }

    public function setTitle($titulo){
        $this->title = $titulo;
        if($titulo == ' '){
            $this -> title = 'N/A';
        }else{
            $this -> title = $titulo;
        }
    }
    
    public function getTitle(){
        return $this->title;
    }

    public function getConversion(){
        $years = floor($this->meses / 12);
        $modulo = $this->meses % 12;
        return "$years años $modulo meses";
    }

    public function getDescription(){
        return $this -> description;
    }
}