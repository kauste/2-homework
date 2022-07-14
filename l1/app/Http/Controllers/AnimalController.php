<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\ColorController;
use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Color;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->sort){
            if ($request->sort == 'asc'){
                $animals = Animal::orderBy('title', 'asc')->get();
            }
            elseif($request->sort == 'desc'){
                $animals = Animal::orderBy('title', 'desc')->get();
            }
            else {
                $animals = Animal::all();
            }    
        }
        else {
            $animals = Animal::all();
        }
        return view('animals.list', ['title'=>'List of animals', 'animals'=> $animals, 'sort'=> ($request->sort ?? 'default')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors = Color::all();

        return view('animals.create', ['title' => 'Create new animal', 'colors' => $colors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreColorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animal = new Animal;
        $animal->color_id = $request->animal_color;
        $animal->title = $request->animal_choice;
        $animal->save();
        return redirect()->route('animalsCreate')->with('message', 'Animal is added');
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
    public function edit(Animal $animal)
    {
        $colors = Color::All();
        return view('animals.edit', ['title'=>'Change this animal', 'animal'=> $animal, 'colors'=> $colors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateColorRequest  $request
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        $animal->title = $request-> animal_name;
        $animal->color_id = $request->animal_color;
        $animal->save();
        return redirect()->route('animalsList')->with('message', 'Animal was changed as you prefered.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()->route('animalsList')->with('message', 'No more of this terrible animal.');
    }
}
