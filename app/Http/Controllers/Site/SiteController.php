<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\articales;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() 
    {
   
       return view('site.index');
    }

    public function about() 
    {
     
       return view('site.about');
    }
    public function details() 
    {
     
       return view('site.details');
    }
}
