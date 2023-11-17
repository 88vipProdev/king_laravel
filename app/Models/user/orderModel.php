<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\user\orderItemModel;
class orderModel extends Model
{

    protected $table = "orders";
    protected $fillable = ["id","user_id"] ;
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class,"user_id");
    }
    public function orderItemModel()
    {
        return $this->belongsTo(OrderItemModel::class,"");
    }
}
