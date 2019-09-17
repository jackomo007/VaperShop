<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    /**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
    'title',
    'description',
    'pricing',
    'extension',
    'sub_category_id'
];

public function list()
{
   $product = $this->get();
   $total = $this->count();
   $array = array();


   if($total > 0){
       for ($i= 0; $i <= $total-1; $i++) {

        $pricing = $this->mascaraDinheiro($product[$i]->pricing);

           $array[$i]["id"]                 = "<td><h6 class='mini-title upper'>".$product[$i]->id."</b></h6></td>";
           $array[$i]["title"]               = "<td class='hide-on-small-only'><h6 class='mini-title upper'>".$product[$i]->title."</b></h6></td>";
           $array[$i]["price"]        = "<td class='hide-on-small-only'><h6 class='mini-title upper'>".$pricing."</b></h6></td>";
           $array[$i]["actions"]            = "<button class='btn btn-warning'><i class='fa fa-pencil  editar-producto'  pro-cod=".$product[$i]->id." pro-title='".$product[$i]->title."' pro-description='".$product[$i]->description."' pro-pricing='".$pricing."' sub_category_id='".$product[$i]->sub_category_id."' ></i></btn><button class='btn btn-danger' style='margin-left: 5px;'><i class='fa fa-times eliminar_producto' pro-cod=".$product[$i]->id."></i></btn>";
       }
       return $array;
   } else  {
       return false;
   }
}

public function subCategory()
{
   return $this->belongsTo('App\SubCategory');
}

public function mascaraDinheiro($valorDinheiro)
{
    $valor = "";

    if(!is_null($valorDinheiro)){
        $arrayValor = explode('.', $valorDinheiro);
        $arrayValorUni = str_split($arrayValor[0]);

        if(count($arrayValor) > 1){

            if(count($arrayValorUni) > 3){
                if (in_array("-", $arrayValorUni)) {
                    $count2 = 1;
                    for($count = count($arrayValorUni); $count > 0; $count--){
                        if ($count2%3 == 0) {
                            if(count($arrayValorUni) == $count2){
                                $valor = $arrayValorUni[$count-1] . $valor;
                            }else{
                                if(count($arrayValorUni)-1 == $count2){
                                    $valor = "".$arrayValorUni[$count-1] . $valor;
                                }
                                else{
                                    $valor = ".".$arrayValorUni[$count-1] . $valor;
                                }
                            }
                        }else {

                            $valor = $arrayValorUni[$count-1] . $valor;
                        }
                        $count2++;
                    }
                }else{
                    $count2 = 1;
                    for($count = count($arrayValorUni); $count > 0; $count--){
                        if ($count2%3 == 0) {
                            if(count($arrayValorUni) == $count2){
                                $valor = $arrayValorUni[$count-1] . $valor;
                            }
                            else{
                                $valor = ".".$arrayValorUni[$count-1] . $valor;
                            }
                        }else {
                            $valor = $arrayValorUni[$count-1] . $valor;
                        }
                        $count2++;
                    }
                }
            }else{
                $valor = $arrayValor[0];
            }

            $valor = $valor.",".$arrayValor[1];
        }else{
            if(count($arrayValorUni) > 3){
                if (in_array("-", $arrayValorUni)) {
                    $count2 = 1;
                    for($count = count($arrayValorUni); $count > 0; $count--){
                        if ($count2%3 == 0) {
                            if(count($arrayValorUni) == $count2){
                                $valor = $arrayValorUni[$count-1] . $valor;
                            }else{
                                if(count($arrayValorUni)-1 == $count2){
                                    $valor = "".$arrayValorUni[$count-1] . $valor;
                                }
                                else{
                                    $valor = ".".$arrayValorUni[$count-1] . $valor;
                                }
                            }
                        }else {

                            $valor = $arrayValorUni[$count-1] . $valor;
                        }
                        $count2++;
                    }
                }else{
                    $count2 = 1;
                    for($count = count($arrayValorUni); $count > 0; $count--){
                        if ($count2%3 == 0) {
                            if(count($arrayValorUni) == $count2){
                                $valor = $arrayValorUni[$count-1] . $valor;
                            }
                            else{
                                $valor = ".".$arrayValorUni[$count-1] . $valor;
                            }
                        }else {
                            $valor = $arrayValorUni[$count-1] . $valor;
                        }
                        $count2++;
                    }
                }
            }else{
                $valor = $arrayValor[0];
            }

            $valor = $valor.",00";
        }
    }else{
        $valor = "0,00";
    }

    return $valor;
}
}
