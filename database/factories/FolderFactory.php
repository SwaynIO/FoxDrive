<?php

namespace Database\Factories;

use App\Folder;
use Illuminate\Database\Eloquent\Factories\Factory;

class FolderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->realTextBetween(100, 1000),
            'type' => 'folder',
        ];
    }
}
