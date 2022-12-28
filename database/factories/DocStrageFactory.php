<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DocStrageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=>1,
            'title' => $this->faker->realText(100),
            'category' => $this->faker->word(7),
            'url' =>$this->faker->url(),
            'text' => $this->faker->realText(200),
            'trash' =>$this->faker->boolean(),
        ];
    }
}
