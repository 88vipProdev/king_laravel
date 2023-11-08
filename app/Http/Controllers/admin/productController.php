<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\productCreate;
use App\Models\admin\productModel;

class productController extends Controller
{
         protected $product ;

         public function __construct(productModel $product)
         {
               $this->productModel = $product;

         }

         public function create()
         {
               return view("admin.createProduct");
         }

         public function product(productCreate $request)
         {
               $path = null;
               if ($request->hasFile("image")) {
                    $image = $request->file("image");
                    $path = $image->store("uploads","public");
               }

               $listdata = [
                "name"=> $request->input('name'),
                'location' => isset($request->location) ? $request->location : null,
                'price'=>$request->input('price'),
                'image'=>$path ,
            ];

              $product = productModel :: createTour($listdata);
         }


         public function edit($id)
         {
            $product = productModel ::edit($id);
            return view('admin.editProduct', compact('product','id'));
         }

        public function update(productCreate $request, $id)
        {
               $path = null;
               if ($request->hasFile("image")) {
                    $image = $request->file("image");
                    $path = $image->store("uploads","public");
               }

               $listdata = [
               "name"=> $request->input('name'),
               'location' => isset($request->location) ? $request->location : null,
               'price'=>$request->input('price'),
               'image'=>$path ,
               ];
               

               $product = productModel :: editTour($listdata);
        }
        public function deleteTour($id)
        {
                if($product = productModel :: deleteTour($id))
                {
                         return redirect()->route('admin.show')->with('success','xóa thành cônng');
                }
                else{
                         return redirect()->route('admin.index')->with('error','không tìm thấy sản phẩm ');
                }
        }
}
