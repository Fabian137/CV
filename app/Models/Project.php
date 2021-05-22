<?

namespace App\Models;

include_once 'BaseElement.php';

class Project extends BaseElement{
    public function __construct($title,$description){
        $this->title = $title;
        $this->description = $description;
    }
    
    public function getConversion(){
        $years = floor($this->meses / 12);
        $modulo = $this->meses % 12;
        return "del proyecto: $years años $modulo meses";
    }
}