<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class createProduct extends Model
{
    use HasFactory;

            protected $fillable = ['name','image','location','price'];
            protected $table = 'product';

        public  static  function createTour($item)
        {
                $product = DB::table('product')->insert([
                'name' => $item['name'],
                'image' => isset($item['image']) ? $item['image'] : null,
                'location' => $item['location'],
                'price' => $item['price'],
                ]);
            return $product;
        }



}
