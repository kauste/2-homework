<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AnimalController;
use App\Models\Animal;
use App\Models\Color;
use DB;

class FrontController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
        if(!$request->color_id){
            $animals = match($request->sort){
                'animal-asc' => [DB::table('animals')
                                ->join('colors', 'animals.color_id', '=','colors.id')
                                ->select('colors.*', 'colors.title as color_title', 'animals.*')
                                ->orderBy('animals.title', 'asc')
                                ->orderBy('colors.title', 'asc')
                                ->get(), $request->sort],
                'animal-desc' => [DB::table('animals')
                                ->join('colors', 'animals.color_id', '=','colors.id')
                                ->select('colors.*', 'colors.title as color_title', 'animals.*')
                                ->orderBy('animals.title', 'desc')
                                ->orderBy('colors.title', 'asc')
                                ->get(), $request->sort],
                'color-asc' => [DB::table('animals')
                                ->join('colors', 'animals.color_id', '=','colors.id')
                                ->select('colors.*', 'colors.title as color_title', 'animals.*')
                                ->orderBy('colors.title', 'asc')
                                ->get(), $request->sort],
                'color-desc' => [DB::table('animals')
                                ->join('colors', 'animals.color_id', '=','colors.id')
                                ->select('colors.*', 'colors.title as color_title', 'animals.*')
                                ->orderBy('colors.title', 'desc')
                                ->get(), $request->sort],
                default => [DB::table('animals')
                                ->join('colors', 'animals.color_id', '=','colors.id')
                                ->select('colors.*', 'colors.title as color_title', 'animals.*')
                                ->get()->shuffle(), 'default', $request->color_id],
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
                                ->get(), $request->sort],
                'animal-desc' => [DB::table('animals')
                                ->join('colors', 'animals.color_id', '=','colors.id')
                                ->select('colors.*', 'colors.title as color_title', 'animals.*')
                                ->where('animals.color_id', $request->color_id)
                                ->orderBy('animals.title', 'desc')
                                ->orderBy('colors.title', 'asc')
                                ->get(), $request->sort],
                'color-asc' => [DB::table('animals')
                                ->join('colors', 'animals.color_id', '=','colors.id')
                                ->select('colors.*', 'colors.title as color_title', 'animals.*')
                                ->where('animals.color_id', $request->color_id)
                                ->orderBy('colors.title', 'asc')
                                ->get(), $request->sort],
                'color-desc' => [DB::table('animals')
                                ->join('colors', 'animals.color_id', '=','colors.id')
                                ->select('colors.*', 'colors.title as color_title', 'animals.*')
                                ->where('animals.color_id', $request->color_id)
                                ->orderBy('colors.title', 'desc')
                                ->get(), $request->sort],
                default => [DB::table('animals')
                                ->join('colors', 'animals.color_id', '=','colors.id')
                                ->select('colors.*', 'colors.title as color_title', 'animals.*')
                                ->where('animals.color_id', $request->color_id)
                                ->get()->shuffle(), 'default'],
            };
            $filter = (int) $request->color_id; // kodel filtra galim imt tiesiai is requesto, o sorto ne?
        }
        return view('front.index', ['animals' => $animals[0], 'sort' => $animals[1], 'colors' => Color::all(), 'filter'=> $filter]);
    }
}
