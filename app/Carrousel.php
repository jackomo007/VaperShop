<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrousel extends Model
{
    protected $fillable = [
    'description',
    'image',
    ];
    public function list()
    {
        $carrousel = $this->get();
        $total = $this->count();
        $array = array();


        if($total > 0){
            for ($i= 0; $i <= $total-1; $i++) {

                $array[$i]["id"]                 = "<td><h6 class='mini-title upper'>".$carrousel[$i]->id."</b></h6></td>";
                $array[$i]["description"]               = "<td class='hide-on-small-only'><h6 class='mini-title upper'>".$carrousel[$i]->description."</b></h6></td>";
                $array[$i]["actions"]            = "<button class='btn btn-primary'><i class='fa fa-pencil  editar-carrousel'  car-cod=".$carrousel[$i]->id." car-image=".$carrousel[$i]->image." car-description='".$carrousel[$i]->description."' style='margin-left: 5px;'></i></btn><button class='btn btn-danger'><i class='fa fa-times eliminar_carrousel' car-cod=".$carrousel[$i]->id."></i></btn>";
            }
            return $array;
        } else  {
            return false;
        }
    }
}
