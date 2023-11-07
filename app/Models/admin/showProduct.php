<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class showProduct extends Model
{
    protected $table = "product";


   

          public static function showProductTour()
          {
                $listProduct = DB::table("product")->get();
                return $listProduct;
          }

}
