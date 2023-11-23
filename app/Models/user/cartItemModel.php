<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user\cartModel;
use App\Models\user\product;

class cartItemModel extends Model
{   
    use HasFactory;

    protected $table = "cart_items";

    protected $fillable = ["id","cart_id","product_id"] ;


    public function cartModel()
    {
        return $this->belongsTo(cartModel::class);
    }

    public function product()
    {
        return $this->belongsTo(product::class);
    }


}
