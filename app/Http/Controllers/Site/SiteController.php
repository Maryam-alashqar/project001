<?php

namespace App\Http\Controllers\Site;

use App\Models\articales;
use App\Models\categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class SiteController extends Controller
{
    public function index()
    {
        $articales = articales::with('category')->latest('id')
            ->orderBy('id', 'desc')->limit(5)->get();
            
            $top_trend = articales::with('category')
                ->orderBy('views', 'desc')->limit(1)->get();

        return view('site.index', compact('articales', 'top_trend'));
    }

    public function details($id)
    {
        $details = articales::findOrFail($id);

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
