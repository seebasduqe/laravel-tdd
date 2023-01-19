<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Repository>
 */
class RepositoryFactory extends Factory
{

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'url' => $this->faker->url,
            'description' => $this->faker->text
        ];
    }
}
