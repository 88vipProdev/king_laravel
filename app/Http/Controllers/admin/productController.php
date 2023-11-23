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
                  $product = productModel ::find($id);
                  $category = categoriesModel::pluck("namecategory","id");
                  return view('admin.editProduct', compact('product','id','category'));
            }

            public function update(productCreate $request,$id)
            {
                  
                  $product = productModel ::find($id);
            
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
                        

                        productModel :: editTour($datalist,$id);
                  
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

            public function deleteCategories($id)
            {
                  $delete = categoriesModel::DeleteCategories($id);                                                                                                           
            
            }



}
