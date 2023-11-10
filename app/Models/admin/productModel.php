<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class productModel extends Model
{
    use HasFactory;

            protected $fillable = ['name','image','location','price'];
            protected $table = 'product';
           
           
            protected $primaryKey = 'id';

            public static function createTour($item, $categoryID)
            {
                $categoryId = DB::table('category')->where('namecategory', $categoryID['namecategory'])->value('id');
            
                $productId = DB::table('product')->insertGetId([
                    'name' => $item['name'],
                    'image' => $item['image'],
                    'location' => $item['location'],
                    'price' => $item['price'],
                    'categories_id' => $categoryId,
                ]);
            
                return $productId;
            }
        public static function edit($id)
        {
                $product = DB::table('product')->find($id);
                return $product;
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

      




}
