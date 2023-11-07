<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\productCreate;
use App\Models\admin\createProduct;

class productController extends Controller
{
            protected  $product;
            public function __construc(createProduct $product)
            {
                $this->createProduct = $product;
            }
            public function create()
            {
                return view("admin.createProduct");
            }

            public function product(productCreate $request)
            {
                $path = null ; 
                if($request->hasFile('image')){
                    $image = $request->file('image');
                    $path = $image->store('uploads','public');
        
                }

                $listdata = [
                    "name"=> $request->input('name'),
                    'location' => isset($request->location) ? $request->location : null,
                    'price'=>$request->input('price'),
                    'image'=>$path ,
                ];
                // dd($listdata);
                $product = createProduct::createTour($listdata);
           
            }

            public function edit()
            {
                return view('admin.editProduct');
            }



}
