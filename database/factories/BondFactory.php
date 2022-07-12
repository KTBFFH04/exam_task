<?php

namespace Database\Factories;

use App\Models\Bond;
use Illuminate\Database\Eloquent\Factories\Factory;

class BondFactory extends Factory
{
    protected $model = Bond::class;

    public function definition(): array
    {
    	return [
    	    'order_id'=>$this->faker->uuid
    	];
    }
}
