<?php

namespace App\Models\admin;
use App\Models\admin\categoriesModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class productModel extends Model
{
    use HasFactory;

            protected $fillable = ['name','image','location','price','categories_id'];
            protected $table = 'product';
           
           
            protected $primaryKey = 'id';

        public function categories()
        {
            return $this->belongsTo(categoriesModel::class);
        }
        public static function editTour($newdata, $id)
        {
             
               $data = productModel::find($id);
               $data->name = $newdata["name"];
               $data->image = $newdata["image"];
               $data->location = $newdata["location"];
               $data->price = $newdata["price"];
               $data->categories_id = $newdata["categories_id"];
               $data->save();
               return $data;


        }

        public static function deleteTour($id)
        {
               $product = DB::table('product')->find($id);
               if($product){
                    DB::table('product')->where('id', $id)->delete();
                    return true;
               }
               else{
                    return false;
                }
               
        }

        public static function createTour($data)
        {
                $product = new productModel();
                $product->name = $data["name"];
                $product->image = $data["image"];
                $product->location = $data["location"];
                $product->price = $data["price"];
                $product->categories_id = $data["categories_id"];
                $product ->save();
                return $product ;
        }

      




}
