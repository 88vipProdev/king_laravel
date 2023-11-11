<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class showCategories extends Model
{
    use HasFactory;


    protected $fillable = ["id","namecatefory"];

    protected $table = "category";

    public static function showCategory()
    {
        $listCate = showCategories :: all();
        return $listCate;
    }

}
