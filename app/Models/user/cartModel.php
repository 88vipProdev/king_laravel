<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\user\cartItemModel;
use App\Models\user\product;


class cartModel extends Model
{
        use HasFactory;
        protected $table = "carts";
        protected $fillable = ["id","user_id"] ;


        public function product()
        {
            return $this->belongsTo(product::class);
        }
      


        public static function showCart()
        {    $user_id = Auth()->id();
              $cartItems = cartModel::where('user_id', $user_id)->with('product') ->get();
        
        
              return $cartItems  ; 
        }
}
