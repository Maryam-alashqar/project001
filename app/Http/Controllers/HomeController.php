<?php

namespace App\Http\Controllers;

use App\Models\articales;
use Illuminate\Http\Request;
use CyrildeWit\EloquentViewable\Support\Period;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 /*   public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $weekly_top = articales::with('category')->orderByViews('desc', Period::pastDays(7))->limit(6)->get();

        return view('auth.selection', compact('weekly_top'));
    }

//     public function index()
//    {
//         return view('/');
//     }
}
