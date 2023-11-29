<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\user\cartModel;
class orderModel extends Model
{

    protected $table = "orders";
    protected $fillable = ["id","user_id","cart_id,","fullname","nametour","address","status","sdt","total_money"] ;
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class,"user_id");
    }

    public function carts()
    {
        return $this->belongsTo(cartModel::class , "id" );
    }

    

    public static function oder($item ,$id)
    {

        $cart = cartModel::where('user_id', auth()->id())->first();
        $order = new orderModel();
        $order->user_id = auth()->id();

        $order->cart_id = $id ;
            if (isset($item["nametour"]) && $item["nametour"] !== null) {
                $order->nametour = $item["nametour"];
            } 
            if (isset($item["address"]) && $item["address"] !== null) {
                $order->address = $item["address"];
            }
            
            if (isset($item["sdt"]) && $item["sdt"] !== null) {
                $order->sdt = $item["sdt"];
            }
            
            if (isset($item["fullname"]) && $item["fullname"] !== null) {
                $order->fullname = $item["fullname"];
            } 
            
        
        $order->price = $item["price"];
        $order->quantity = $item["quantity"] ; 
        if (isset($item["total_money"])) {
            $order->total_money = $item["total_money"];
        }
        $order->save();
    }
}
