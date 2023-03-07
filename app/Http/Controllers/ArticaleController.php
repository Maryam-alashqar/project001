<?php

namespace App\Http\Controllers;

use App\Models\authors;
use App\Models\articales;
use App\Models\categories;
use Illuminate\Http\Request;
use App\Http\Requests\ArticaleRequest;

class ArticaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = categories::all();
        $articales = articales::all();
       return view('admin.articales.index', compact('articales','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = categories::all();
        $author = authors::all();
        return view('admin.articales.create', compact('categories','author'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticaleRequest $request)
    {
        $path = $request->file('image')->store('/uploads/articales', 'custom');

        
            articales::create([
               'category_id' => $request->get('category_id'),
                'title' => $request->title,
                'short_description' => $request->short_description,
                'full_description' => $request->full_description,
                'image' => $path,    
            ]);
        return redirect()->route('admin.articales.index')->with('msg', 'articale Added Successfully')->with('type', 'success'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $details = articales:: findOrFail($id);
        return view('admin.articales.articaledetail',compact('details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        articales::destroy($id);
        return redirect()->route('admin.articales.index')->with('msg', 'Articale Deleted Successfully')->with('type', 'danger');
    }
    public function trash()
    {
            $articales = articales::onlyTrashed()->latest('id')->paginate(env('PAGINATION_COUNT'));
        return view('admin.articales.trash', compact('articales'));
    }
    
}
