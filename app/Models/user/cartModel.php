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
}
