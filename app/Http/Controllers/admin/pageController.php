<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\pageRequest;
use App\Models\admin\pageNew;
use Illuminate\Http\Request;


class pageController extends Controller
{

    public function __construct(pageNew $pageNew )
    {
        
        $this->pageNew = $pageNew;
    }
    public function page()
    {
        return view("admin.page");
    }

     public  function NewPage(pageRequest $request)  
     {
        

        if($request->hasFile("image")){
            $image = $request->file("image");
            $path = $image->store("uploads","public");

        }else{
            $path = null;
        }


       
          $datalist = [

            "title" =>$request->input("title"),
            "content"=>$request->input("content"),
            "image"=>$path,
          ];
  

          $pageNew = pageNew::create($datalist);

     }
}
