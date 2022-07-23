<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AnimalController;
use App\Models\Animal;
use App\Models\Color;
use DB;

class FrontController extends Controller
{
    public $perPage = 10;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
        $this->perPage = $request->perPage ?? 10;
        $animalsCount = DB::table('animals')->count();
        $allPages = ceil($animalsCount / $this->perPage);
        // dd($request->querry());
        if($request->s){
            $s = explode(' ', $request->s);
            $animals =  [DB::table('animals')
                        ->join('colors', 'animals.color_id', '=','colors.id')
                        ->select('colors.*', 'colors.title as color_title', 'animals.*')
                        ->where(function($items) use ($s){
                            foreach($s as $item)
                            {
                                $items->orWhere('animals.title', 'like', $item . '%')
                                ->orWhere('colors.title', 'like', $item . '%');
                            }
                        })->limit($this->perPage)
                        ->offset($this->perPage * ($request->page - 1))
                        ->get(), 'default'];

            $animalsCount = DB::table('animals')
            ->join('colors', 'animals.color_id', '=','colors.id')
            ->select(DB::raw('count(animals.id) as allAnimals')) //sito ne iki galo pagaunu
            ->where(function($items) use ($s){
                foreach($s as $item)
                {
                    $items->orWhere('animals.title', 'like', $item . '%')
                    ->orWhere('colors.title', 'like', $item . '%');
                }
            })->first()->allAnimals;

            $filter = 0;
        } 
        else {
            if(!$request->color_id){
                $animals = match($request->sort){
                    'animal-asc' => [DB::table('animals')
                                    ->join('colors', 'animals.color_id', '=','colors.id')
                                    ->select('colors.*', 'colors.title as color_title', 'animals.*')
                                    ->orderBy('animals.title', 'asc')
                                    ->orderBy('colors.title', 'asc')
                                    ->limit($this->perPage)
                                    ->offset($this->perPage * ($request->page - 1))
                                    ->get(), $request->sort],
                    'animal-desc' => [DB::table('animals')
                                    ->join('colors', 'animals.color_id', '=','colors.id')
                                    ->select('colors.*', 'colors.title as color_title', 'animals.*')
                                    ->orderBy('animals.title', 'desc')
                                    ->orderBy('colors.title', 'asc')
                                    ->limit($this->perPage)
                                    ->offset($this->perPage * ($request->page - 1))
                                    ->get(), $request->sort],
                    'color-asc' => [DB::table('animals')
                                    ->join('colors', 'animals.color_id', '=','colors.id')
                                    ->select('colors.*', 'colors.title as color_title', 'animals.*')
                                    ->orderBy('colors.title', 'asc')
                                    ->orderBy('animals.title', 'desc')
                                    ->limit($this->perPage)
                                    ->offset($this->perPage * ($request->page - 1))
                                    ->get(), $request->sort],
                    'color-desc' => [DB::table('animals')
                                    ->join('colors', 'animals.color_id', '=','colors.id')
                                    ->select('colors.*', 'colors.title as color_title', 'animals.*')
                                    ->orderBy('colors.title', 'desc')
                                    ->orderBy('animals.title', 'desc')
                                    ->limit($this->perPage)
                                    ->offset($this->perPage * ($request->page - 1))
                                    ->get(), $request->sort],
                    default => [DB::table('animals')
                                    ->join('colors', 'animals.color_id', '=','colors.id')
                                    ->select('colors.*', 'colors.title as color_title', 'animals.*')
                                    ->limit($this->perPage)
                                    ->offset($this->perPage * ($request->page - 1))
                                    ->get(), 'default', $request->color_id],
                };
                $filter = 0;
            }
            else 
            {
                $animals = match($request->sort){
                    'animal-asc' => [DB::table('animals')
                                    ->join('colors', 'animals.color_id', '=','colors.id')
                                    ->select('colors.*', 'colors.title as color_title', 'animals.*')
                                    ->where('animals.color_id', $request->color_id)
                                    ->orderBy('animals.title', 'asc')
                                    ->orderBy('colors.title', 'asc')
                                    ->limit($this->perPage)
                                    ->offset($this->perPage * ($request->page - 1))
                                    ->get(), $request->sort],
                    'animal-desc' => [DB::table('animals')
                                    ->join('colors', 'animals.color_id', '=','colors.id')
                                    ->select('colors.*', 'colors.title as color_title', 'animals.*')
                                    ->where('animals.color_id', $request->color_id)
                                    ->orderBy('animals.title', 'desc')
                                    ->orderBy('colors.title', 'asc')
                                    ->limit($this->perPage)
                                    ->offset($this->perPage * ($request->page - 1))
                                    ->get(), $request->sort],
                    'color-asc' => [DB::table('animals')
                                    ->join('colors', 'animals.color_id', '=','colors.id')
                                    ->select('colors.*', 'colors.title as color_title', 'animals.*')
                                    ->where('animals.color_id', $request->color_id)
                                    ->orderBy('colors.title', 'asc')
                                    ->orderBy('animals.title', 'asc')
                                    ->limit($this->perPage)
                                    ->offset($this->perPage * ($request->page - 1))
                                    ->get(), $request->sort],
                    'color-desc' => [DB::table('animals')
                                    ->join('colors', 'animals.color_id', '=','colors.id')
                                    ->select('colors.*', 'colors.title as color_title', 'animals.*')
                                    ->where('animals.color_id', $request->color_id)
                                    ->orderBy('colors.title', 'desc')
                                    ->orderBy('animals.title', 'asc')
                                    ->limit($this->perPage)
                                    ->offset($this->perPage * ($request->page - 1))
                                    ->get(), $request->sort],
                    default => [DB::table('animals')
                                    ->join('colors', 'animals.color_id', '=','colors.id')
                                    ->select('colors.*', 'colors.title as color_title', 'animals.*')
                                    ->where('animals.color_id', $request->color_id)
                                    ->limit($this->perPage)
                                    ->offset($this->perPage * ($request->page - 1))
                                    ->get(), 'default'],
                };
                $animalsCount = match($request->sort){
                    'animal-asc' => DB::table('animals')
                                    ->join('colors', 'animals.color_id', '=','colors.id')
                                    ->select(DB::raw('count(animals.id) as allAnimals'))
                                    ->where('animals.color_id', $request->color_id)
                                    ->first()->allAnimals,
                    'animal-desc' => DB::table('animals')
                                    ->join('colors', 'animals.color_id', '=','colors.id')
                                    ->select(DB::raw('count(animals.id) as allAnimals'))
                                    ->where('animals.color_id', $request->color_id)
                                    ->first()->allAnimals,
                    'color-asc' => DB::table('animals')
                                    ->join('colors', 'animals.color_id', '=','colors.id')
                                    ->select(DB::raw('count(animals.id) as allAnimals'))
                                    ->where('animals.color_id', $request->color_id)
                                    ->first()->allAnimals,
                    'color-desc' => DB::table('animals')
                                    ->join('colors', 'animals.color_id', '=','colors.id')
                                    ->select(DB::raw('count(animals.id) as allAnimals'))
                                    ->where('animals.color_id', $request->color_id)
                                    ->first()->allAnimals,
                    default => DB::table('animals')
                                    ->join('colors', 'animals.color_id', '=','colors.id')
                                    ->select(DB::raw('count(animals.id) as allAnimals'))
                                    ->where('animals.color_id', $request->color_id)
                                    ->first()->allAnimals,
                };
                
                $filter = (int) $request->color_id; // kodel filtra galim imt tiesiai is requesto, o sorto ne?
            }
        }
        $querry = $request->query();
        if($animalsCount != 0){
            $allPages = ceil($animalsCount / $this->perPage);
        }
        else {
            $allPages = 0;
        }
        
        return view('front.index', ['animals' => $animals[0], 
                                    'sort' => $animals[1], 
                                    'colors' => Color::all(), 
                                    'filter'=> $filter, 
                                    's' => $request->s ?? '',
                                    'allPages' => $allPages,
                                    'pageNow' => $request->page ?? 0,
                                    'perPage'=> $this->perPage,
                                    'querry' => $querry]);
    }
}
