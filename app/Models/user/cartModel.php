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
        protected $fillable = ["id","user_id","product_id"] ;


        public function product()
        {
            return $this->belongsTo(product::class);
        }
      


        public static function showCart()
        {    $user_id = Auth()->id();
              $cartItems = cartModel::where('user_id', $user_id)->with('product') ->get();
        
        
              return $cartItems  ; 
        }

        public static function deleteCart($id)
        {
               
            try {

                // Tìm cart item 
                $cartItem = CartModel::findOrFail($id);
              
                // Lấy số lượng hiện tại
                $currentQuantity = $cartItem->quantity;
              
                // Kiểm tra số lượng > 0 mới giảm được
                if($currentQuantity > 0) {
              
                  // Giảm số lượng
                  $quantity = $currentQuantity - 1;  
              
                  // Cập nhật lại số lượng mới
                  CartModel::where('id', $id)
                           ->update(['quantity' => $quantity]);
              
                  // Trả về thành công
                  return response()->json(['message' => 'Quantity updated']);
              
                } else {
              
                  // Trả về nếu số lượng đã = 0
                  return response()->json(['message' => 'Quantity reached zero'], 400);
              
                }
              
              } catch (\Exception $e) {
              
                return error_response();
              
              }

        }

     
}
