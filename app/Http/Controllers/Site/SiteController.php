<?php

namespace App\Http\Controllers\Site;

use App\Models\view;
use App\Models\articales;
use App\Models\categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use CyrildeWit\EloquentViewable\Support\Period;
use Symfony\Component\HttpFoundation\Session\Session;

class SiteController extends Controller
{
    public function index(articales $top_trend)
    {
        $articales = articales::with('category')->latest('id')
            ->orderBy('id', 'desc')->limit(5)->get();

        $top_trend = articales::orderByViews('desc')
            ->limit(1)->get();

        $trendin_bottom = articales::orderByViews('asc', Period::pastDays(7))
            ->limit(3)->get();
        return view('site.index', compact('articales', 'top_trend', 'trendin_bottom'));
    }

    public function details($id)
    {
        $details = articales::findOrFail($id);
       views($details)->record();
        return view('site.details', compact('details'));
    }

    public function comment($id)
    {
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
