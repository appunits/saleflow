<?php

namespace Plugins\PluginName\Database\Factories;

use Plugins\PluginName\Models\Customer as Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // ...
        ];
    }
}
