<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->sort){
            if ($request->sort == 'asc'){
                $colors = Color::all()->sortBy('title');
            }
            elseif($request->sort == 'desc'){
                $colors = Color::all()->sortByDesc('title');
            }
            else {
                $colors = Color::all();
            }    
        }
        else {
            $colors = Color::all();
        }
        
        return view('colors.list', ['title'=>'List of colors', 'colors'=> $colors, 'sort'=>$request->sort]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('colors.create', ['title' => 'Create new color']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreColorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $color = new Color;
        $color->title = $request->color_name ?? 'no title';
        $color->color = $request->color_choice;
        $color->save();
        return redirect()->route('colorsList')->with('message', 'color is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function show(Color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function edit(Color $color)
    {
        return view('colors.edit', ['title'=>'Change this color', 'color'=> $color]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateColorRequest  $request
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Color $color)
    {
        $color->title = $request-> color_name;
        $color->color = $request->color_choice;
        $color->save();
        return redirect()->route('colorsList')->with('message', 'Color was changed as you prefered.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy(Color $color)
    {
        if(!$color->animals->count()){
            $color->delete();
            $msg = 'No more of this terrible color.';
            return redirect()->route('colorsList')->with('message', 'No more of this terrible color.');
        }
        return redirect()->back()->with('message', 'ERROR! Hey darling, how could you even think to delete this color, there are '.$color->animals->count().' animal(s), whose color is this, so its imposible to delete'); 
    }
}
