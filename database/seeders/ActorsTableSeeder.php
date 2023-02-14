<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Actor;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $actors = ["luca","sofia", "massimiliano", "piersilvio", "francesco"];

        foreach($actors as $actor){
            Actor::create([
                "name"=>$actor,
                "surname"=> "cognome" . $actor,      
                "birth_date"=> "1088-12-15",      
                "surname"=> "cognome" . $actor,      
                "thumb"=> "immagine" . $actor,      
            ]);
        }
       
    }


    
    
}
