<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Role;
class user_role extends Model
{
    use HasFactory;


    protected $table = "user_role";
    protected $primaryKey = "id";

    protected $timestamps = false;


    public function users()
    {
        return $this->belongsToMany(User::class,"user_id");
    }

    public function roles()
    {
        return $this->belongsTo(Role::class , "role_id");
    }

}
