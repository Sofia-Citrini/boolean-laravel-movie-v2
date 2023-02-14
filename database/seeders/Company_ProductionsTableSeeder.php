<?php

namespace Database\Seeders;

use App\Models\CompanyProduction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Company_ProductionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $companies = ["Production1","Production2", "Production3", "Production4", "Production5"];

        foreach($companies as $company){
            CompanyProduction::create([
                "name"=>$company,
                "description"=> "descrizione" . $company,      
                "country"=> "Italy",      
                "ceo"=> "ceo" . $company,        
            ]);
        }
        
    }
}
