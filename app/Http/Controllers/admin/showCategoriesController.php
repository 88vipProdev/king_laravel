<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\showCategories;

class showCategoriesController extends Controller
{
    

        protected  $categories ;

        public function __construct(showCategories $categories)
        {
                $this->showCategories = $categories;
        }
//              **********************************************hiển thị danh mục ******************************************************
        public function showCategories()
        {    $listCategories = showCategories :: showCategory();
        return view("admin.ShowCategories",compact("listCategories"));
        }                                                                
}
