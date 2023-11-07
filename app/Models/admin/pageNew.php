<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;
class pageNew extends Model
{
    use HasFactory;


    protected $fillable = ['title','content', 'image'] ;

    protected $table='page_new';


     
    public static function create($data)
    {
        $page = DB::table('page_new')->insert([
            'title'=> $data['title'],
            'content'=> $data['content'],
            'image'=> $data['image'],
        ]);
        return $page; 
    }
}
