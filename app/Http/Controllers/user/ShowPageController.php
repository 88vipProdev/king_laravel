<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user\ShowPage;

class ShowPageController extends Controller
{
    protected $showPage;

    public function __construct(ShowPage $showPage)
    {
        $this->showPage= $showPage;
    }

    public function showPage()
    {
      
        $show = $this->showPage->show();
       
        return view("user.ShowPage", compact("show"));
       
    }
}


