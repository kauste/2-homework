<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $fantasticColors = collect(['#f1a77a','#1fa777']); //sukuriu kolektoriu
        do{
            $fantasticColors-> push($faker->colorName);
            $fantasticColors = $fantasticColors->unique();
        }while($fantasticColors->count() < 11);

        foreach($fantasticColors as $color){
            DB::table('colors')->insert([
                'color'=>$color,
                'title'=>$color,
            ]);
        }
        // foreach(range(1, 10) as $_){
        //     $faker = Faker::create();
        //     $color = $faker->colorName;
        //     DB::table('colors')->insert([
        //         'color' => $color,
        //         'title' => $color,
        //     ]);
        // }
       
    }
}
