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

            
            public static function showPage()
            {
                   $dataPage= DB::table('page_new')->get();
                   return $dataPage;
            }
            
            public static function create($data)
            {
                $page = DB::table('page_new')->insert([
                    'title'=> $data['title'],
                    'content'=> $data['content'],
                    'image'=> $data['image'],
                ]);
                return $page; 
            }


            public static function edit($id, $data)
            {
                    $pagedata = pageNew::find($id);
                    $pagedata->title = $data['title'];
                    $pagedata->content = $data['content'];
                    $pagedata->image = $data['image'];
                    $pagedata->save();
                    return $pagedata;
            }


}
