<?php

namespace App\Http\Controllers\Site;

use App\Models\articales;
use App\Models\categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\comment;
use CyrildeWit\EloquentViewable\Support\Period;


class SiteController extends Controller
{
    public function index(articales $top_trend)
    {
        $articales = articales::with('category')->latest('id')->orderBy('id', 'desc')->limit(5)->get();
        $top_trend = articales::with('category')->orderByViews('desc')->limit(1)->get();
        $trendin_bottom = articales::with('category')->orderByViews('asc', Period::pastDays(30))->limit(3)->get();
        $weekly_top = articales::with('category')->orderByViews('desc', Period::pastDays(60))->limit(6)->get();
        $categories = categories::all();
        return view('site.index', compact('categories','articales', 'top_trend', 'trendin_bottom', 'weekly_top'));
    }

    public function details($id)
    {
        $categories = categories::all();
        $articales = articales::with('category')->latest('id')->orderBy('id', 'desc')->limit(5)->get();
        $details = articales::findOrFail($id);
        views($details)->record();

        return view('site.details', compact('details','articales','categories'));
    }



    public function category()
    {
        $categories = categories::all();

        return view('site.category',compact('categories'));
    }

    public function about()
    {
        $categories = categories::all();
        return view('site.about', compact('categories'));
    }
    public function contact()
    {
        $categories = categories::all();
        return view('site.contact', compact('categories'));
    }
    public function userProfile()
    {

        return view('site.userProfile');
    }
}
