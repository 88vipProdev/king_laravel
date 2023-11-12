<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\admin\detailModel;
use App\Models\admin\productModel;
use Illuminate\Http\Request;
use App\Http\Requests\detailRequest;

class detailController extends Controller
{
        protected $detail ; 
        protected $productModel ;
        public function __construct(detailModel $detail, productModel $productModel)    
        {
                $this->detailModel = $detail ;
                $this->productModel = $productModel ;

        }


        public function add()
        {   
                $detail = productModel::pluck("name","id");
    
                return view("admin.newDetail",compact("detail"));
        }

        public function createDetail(detailRequest $request)
        {
           
                if ($request->hasFile("image")) {
                    $image = $request->file("image");
                    $path = $image->store("uploads","public");
                }

                $listDetail = [
                    "namedetail"=>$request->input("namedetail"),
                    "review"=>$request->input("review"),
                    "image"=>$path ?? null,
                    "location"=>$request->input("location"),
                    "price"=>$request->input("price"),
                    "productId"=>$request->input("productId"),
                ];

              

                detailModel::addDetail($listDetail);
        }


        public function Showdetail()
        {
                $detaildata = detailModel::showDetail();
                return view("admin.showdetail",compact("detaildata"));
        }

}
