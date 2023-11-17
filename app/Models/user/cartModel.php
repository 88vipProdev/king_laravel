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
   

     public static function addtoCart($data)
     {
          $cart = new cartModel() ;

          $cart->user_id = auth()->user()->id ;
          $cart->product_id = $data["product_id"];
          $cart->name = $data["name"];
          $cart->price = $data["price"];
          $cart->image= $data["image"];
          $cart->quantity = $data["quantity"];
          $cart->save();
     }

     public static function showCart()
     {
       return cartModel::with('product')->where('user_id', auth()->id())->get(); 
     }
}
