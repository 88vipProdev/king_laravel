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
    public function orderItemModel()
    {
        return $this->belongsTo(OrderItemModel::class,"");
    }
    

    public static function oder($item ,$id)
    {

        $cart = cartModel::where('user_id', auth()->id())->first();
        $order = new orderModel();
        $order->user_id = auth()->id();

        $order->user_id = $id ;
        $order->fullname = $item->fullname ;
        $order->address = $item->address ;
        $order->sdt = $item->sdt;
        $order->nametour = $item->nametour;
        $order->price = $item->price;
        $order->quantity = $item->quantity ; 
        $order->total_money = $item->quantity  * $item->price ;
        $order->save();
    }
}
