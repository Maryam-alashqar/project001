<?php

namespace App\Http\Controllers\Site;

use App\Models\articales;
use App\Models\categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
   public function index()
   {
      $articales = articales::with('category')->latest('id')
         ->orderBy('id', 'desc')->limit(5)->get();

      return view('site.index', compact('articales'));
   }
   
   public function details($id)
   {
      $details = articales::findOrFail($id);

      return view('site.details', compact('details'));
   }
   public function category()
   {

      return view('site.category');
   }

   public function about()
   {

      return view('site.about');
   }
   public function contact()
   {

      return view('site.contact');
   }
}
