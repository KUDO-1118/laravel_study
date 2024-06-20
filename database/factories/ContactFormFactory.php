<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactForm>
 */
class ContactFormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->generateShortName(),
            'title' => $this->faker->realText(30),
            'email' => $this->faker->email(),
            'url' => $this->faker->url(),
            'gender' => $this->faker->boolean(),
            'age' => $this->faker->numberBetween(1, 6),
            'contact' => $this->faker->realText(200),
        ];
    }

    /**
     * Generate a name with a maximum length of 20 characters.
     *
     * @return string
     */
    private function generateShortName()
    {
        $name = $this->faker->name;
        return substr($name, 0, 20);
    }
}