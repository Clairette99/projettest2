<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table("type_articles")->insert([

        ["nom"=> "Voiture"],
        ["nom"=>"immobilier"],
        ["nom"=>"appareils electroniques"],
        ["nom"=>"Salle"]
       ]);
    }
}
