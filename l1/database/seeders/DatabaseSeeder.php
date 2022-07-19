<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

        $fantasticColors = collect(['#f1a77a']); //sukuriu kolektoriu
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

        $animals = ['Cat', 'Tiger', 'Penguin', 'Puma', 'Zebro', 'Giraffe', 'Donkey', 'Snake', 'Koala', 'Panda'];
        foreach(range(1, 77) as $_){
            DB::table('animals')->insert([
                'title'=>$animals[rand(0, count($animals) - 1)],
                'color_id'=> rand(1, 10),
            ]);
        }

        DB::table('users')->insert([
            'email' => 'romas@eina',
            'name' => 'Romas',
            'password' => Hash::make(123),
        ]);
        DB::table('users')->insert([
            'email' => 'skirmantas@eina',
            'name' => 'Skirmantas',
            'password' => Hash::make(123),
            'role' => 10,
        ]);
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
