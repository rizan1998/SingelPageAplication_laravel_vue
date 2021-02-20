<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->name,
            'slug' => Str::slug($this->faker->name),
            'subject_id' => $this->faker->numberBetween($min = 1, $max = 2),
            'description' => $this->faker->text,
            'path' => '/storage/uploads/1613714965_code2.png',
            'image_name' => '1613714966_code2.png'
        ];
    }
}
