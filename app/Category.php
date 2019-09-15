<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description',
    ];

    public function list()
    {
        $categories = $this->get();
        $total = $this->count();
        $array = array();

        if($total > 0){
            for ($i= 0; $i <= $total-1; $i++) {
                $array[$i]["id"]                 = "<td><h6 class='mini-title upper'>".$categories[$i]->id."</b></h6></td>";
                $array[$i]["name"]               = "<td class='hide-on-small-only'><h6 class='mini-title upper'>".$categories[$i]->name."</b></h6></td>";
                $array[$i]["description"]        = "<td class='hide-on-small-only'><h6 class='mini-title upper'>".$categories[$i]->description."</b></h6></td>";
                $array[$i]["actions"]            = "<button class='btn btn-warning'><i class='fa fa-pencil  editar-categoria'  cat-cod=".$categories[$i]->id." cat-nome='".$categories[$i]->name."' cat-description='".$categories[$i]->description."' ></i></btn><button class='btn btn-danger' style='margin-left: 5px;'><i class='fa fa-times eliminar_categoria' cat-cod=".$categories[$i]->id."></i></btn>";
            }
            return $array;
        } else  {
            return false;
        }
    }
}
