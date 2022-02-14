<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function () {
                return User::all()->random()->id;
            },
            'title' => $this->faker->sentence,
            'url' => 'https://youtu.be/scaZEfZL4QI',
            'iframe' => '<iframe width="1280" height="720" src="https://www.youtube.com/embed/scaZEfZL4QI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ];
    }
}