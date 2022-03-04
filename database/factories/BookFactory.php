<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => $this->faker->uuid(),
            'title' => $this->faker->sentence(5),
            'genre' => $this->faker->word(),
            'author' => $this->faker->name(),
            'year' => $this->faker->year(),
            'pages' => $this->faker->randomNumber(3, true),
            'language' => $this->faker->languageCode(),
            'edition' => $this->faker->randomNumber(2, false),
            'isbn' => $this->faker->isbn13()
        ];
    }
}
