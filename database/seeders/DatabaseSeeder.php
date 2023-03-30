<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Client;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        $this->call(TypeArticleTableSeeder::class);

            Article::factory(10)->create();
            Client::factory(10)->create();
            

        $this->call(RoleTableSeeder::class);
        $this->call(StatutLocationTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(DureeLocationTableSeeder::class);
    }
}
