<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\productModel;

class detailModel extends Model
{


    use HasFactory;
    protected $fillable = ["namedetail","review","location","image","price","productId"] ;

    protected $table = "product_detail";


        public function productModel()
        {
            return $this->belongsTo(ProductModel::class);
        }


         public static function createDetail($listDetail)
         {
                 $detail = new detailModel();
                 $detail->namedetail = $listDetail["namedatail"];
                 $detail->review = $listDetail["review"];
                 $detail->image = $listDetail["image"];
                 $detail->location = $listDetail["location"];
                 $detail->price = $listDetail["price"];
                 $detail->productId = $listDetail["productId"];
                 $detail->save() ;
                 return $detail ;

         }
   
}
