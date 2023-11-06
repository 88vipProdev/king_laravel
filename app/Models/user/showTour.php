<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class showTour extends Model
{
    use HasFactory;
    protected $table = "product";


        public static function showProductModel()
        {
            $showTour = DB::table("product")->get();
            return $showTour;
        }
    
}
