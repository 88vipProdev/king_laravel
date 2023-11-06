<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ShowPage extends Model
{
    use HasFactory;


  

    protected $table = "page_new";


    public function show()
    {
        $show = DB::table("page_new")->get();
        return $show;
    }
}
