<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{

    protected $model = Article::class;
    
    public function definition(): array
    {
        return [
            'nom' =>$this-> faker->lastName,
            'noSerie' => $this->faker->swiftBicNumber,
            'imageUrl' =>$this-> faker->imageUrl(),
            'estDisponible' => rand(0,1),
            'type_article_id' => rand(1,4)
        ];
    }
}
