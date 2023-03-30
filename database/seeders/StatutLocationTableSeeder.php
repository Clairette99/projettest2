<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatutLocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("statut_locations")->insert([

            ["nom"=> "En attente"],
            ["nom"=>"En cours"],
            ["nom"=>"terminée"],

           ]);
    }
}
