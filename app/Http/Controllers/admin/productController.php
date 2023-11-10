<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\productCreate;
use App\Http\Requests\categoriesRequest;
use App\Models\admin\productModel;
use App\Models\admin\categoriesModel;

class productController extends Controller
{
         protected $product ;
         protected $categories;

         public function __construct(productModel $product, categoriesModel $categories)
         {
               $this->productModel = $product;
               $this->categoriesModel = $categories;

         }

         public function create()
         {     


               $category = categoriesModel ::pluck("namecategory","id");
               return view("admin.createProduct",compact("category"));
         }

         public function product(productCreate $request)
         {
              
               if ($request->hasFile("image")) {
                    $image = $request->file("image");
                    $path = $image->store("uploads","public");
               }

               $datalist = [
                        "name"=>$request->input("name"),
                        "image"=>$path ?? null ,
                        "location"=>$request->input("location"),
                        "price"=>$request->input("price"),
                        "categories_id"=>$request->input("categories_id"),
               ];

          
               productModel :: createTour($datalist);
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

       Public function categories()
       {
            return view('admin.createCategories');
      
      }
      public function createCategories(categoriesRequest $request){

            $listCategories = [
                  "namecategory" => $request->input("namecategory"),
            ];

            categoriesModel :: newcategories($listCategories);

      }
}
