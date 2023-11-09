<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class categoriesModel extends Model
{
    use HasFactory;


    protected $table = "category";

    protected $fillable = ["namecategory"];

// ------------------------------------------------create Tour categories -----------------------------------------//
            public static function newcategories($listCategories)
            {
                if (!empty($listCategories["namecategory"])) {
                    $categories = DB::table("category")->insert([
                        "namecategory" => $listCategories["namecategory"],
                    ]);
                }
            }
}
