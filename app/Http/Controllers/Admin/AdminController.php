<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
      }
      public function settings(){
        return view('admin.settings');
      }

      public function settings_store(Request $request)
      {
   
      }
}
