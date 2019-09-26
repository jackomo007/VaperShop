<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'sub_categories';

         /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description','category_id'
    ];

    public function list()
    {
        $sub_categories = $this->get();
        $total = $this->count();
        $array = array();

        if($total > 0){
            for ($i= 0; $i <= $total-1; $i++) {
                $array[$i]["id"]                 = "<td><h6 class='mini-title upper'>".$sub_categories[$i]->id."</b></h6></td>";
                $array[$i]["name"]               = "<td class='hide-on-small-only'><h6 class='mini-title upper'>".$sub_categories[$i]->name."</b></h6></td>";
                $array[$i]["description"]        = "<td class='hide-on-small-only'><h6 class='mini-title upper'>".$sub_categories[$i]->description."</b></h6></td>";
                $array[$i]["actions"]            = "<button class='btn btn-warning'><i class='fa fa-pencil  editar-sub-categoria'  sub_cat-cod=".$sub_categories[$i]->id." sub_cat-nome='".$sub_categories[$i]->name."' sub_cat-description='".$sub_categories[$i]->description."' sub_category_id='".$sub_categories[$i]->category_id."' ></i></btn><button class='btn btn-danger' style='margin-left: 5px;'><i class='fa fa-times eliminar_sub_categoria' sub_cat-cod=".$sub_categories[$i]->id."></i></btn>";
            }
            return $array;
        } else  {
            return false;
        }
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
