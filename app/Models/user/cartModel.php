<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class cartModel extends Model
{
    use HasFactory;
    protected $table = "carts";
    protected $fillable = ["id","user_id"] ;


    public function users()
    {
        return $this->belongsToas(User::class);
    }

    public static function addtoCart($cartId , $product  , $qty )
    {
            $cartItem = self::where("cart_id",$cartId)
            ->where("product_id",$product)
            ->first();
            if ($cartItem) {
                $cartItem->update(["qty"=>$cartItem->quantity+$qty]);

            }else{
                $cartItem= self::create([
                    "product_id"=>$product ,
                    "quantity"=>$qty,
                    "cart_id"=>$cartId,
                    ]);


            }
            return $cartItem;
    }

}
