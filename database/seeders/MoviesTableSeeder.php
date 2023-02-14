<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = ["luca","sofia", "massimiliano", "piersilvio", "francesco"];

        foreach($movies as $movie){
            Movie::create([
                "cover_img"=>"immagine" . $movie,
                "title"=> $movie,      
                "description"=> "descrizione" . $movie,     
            ]);
        }
    }
}
