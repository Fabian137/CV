<?/*

namespace App\Models;

include_once 'BaseElement.php';

class Job extends BaseElement{

 
}*/

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Job extends Model{
   protected $table = 'xplaboral';
    
    public function getConversion(){
        $years = floor($this->meses / 12);
        $modulo = $this->meses % 12;
        return "del proyecto: $years años $modulo meses";
    }
}