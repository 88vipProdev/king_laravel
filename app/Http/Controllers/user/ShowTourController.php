<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user\showTour;
class ShowTourController extends Controller
{
    protected $listTour ; 

              public function __construct(showTour $listTour)
              {
                    $this->showTour = $listTour;
              }

              public function showTour()
              {
                    $datalist = showTour::showProductModel();
                    return view("user.showTour", compact("datalist"));
              }

              
}
