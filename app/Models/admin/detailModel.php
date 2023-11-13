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
            return $this->belongsTo(productModel::class);
        }


         public static function addDetail($listDetail)
         {
                 $detail = new detailModel();
                 $detail->namedetail = $listDetail["namedetail"];
                 $detail->review = $listDetail["review"];
                 $detail->image = $listDetail["image"];
                 $detail->location = $listDetail["location"];
                 $detail->price = $listDetail["price"];
                 $detail->productId = $listDetail["productId"];
                 $detail->save() ;
                 return $detail ;

         }

         public static function showDetail()
         {
                $detaildata = detailModel::all();
                return $detaildata ;
         }

         public static function updateDetail($data,$id)
         {
                $detail = detailModel::find($id);
                $detail->namedetail = $data["namedetail"];
                $detail->review = $data["review"];
                $detail->image = $data["image"];
                $detail->location = $data["location"];
                $detail->price = $data["price"];
                $detail->productId = $data["productId"];
                $detail->save() ;
                return $detail ;
         }
   
}
