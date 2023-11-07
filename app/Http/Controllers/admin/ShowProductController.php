<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\showProduct;

class ShowProductController extends Controller
{         

    protected  $products;
          public function __construct(showProduct $products)
          {
                $this->showProduct = $products;
          }

          public function show()
          {
                $listProduct = showProduct::showProductTour();
                return view("admin.showProduct", compact("listProduct"));
          }
}

