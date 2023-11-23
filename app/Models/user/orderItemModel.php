<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user\orderModel;

use App\Models\user\product;
class orderItemModel extends Model
{
    use HasFactory;
    protected $table = "order_items";
    protected $fillable = ["id","order_id","product_id"] ;

    public function orderModel()
    {
        return $this->belongsTo(orderModel::class);
    }
    

    public function product()
    {
        return $this->belongsTo(product::class);
    } 
    
  
}
