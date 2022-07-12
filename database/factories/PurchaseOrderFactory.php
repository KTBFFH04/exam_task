<?php

namespace Database\Factories;

use App\Models\PurchaseOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseOrderFactory extends Factory
{
    protected $model = PurchaseOrder::class;

    public function definition(): array
    {

        return [
            'issue_date' => $this->faker->date(),
            'circulation_deadline' => $this->faker->date(),
            'nominal_price' => $this->faker->numberBetween(30,300),
            'payment_frequency' => $this->faker->randomElement(['1', '2', '4', '12']),
            'percent_calc_period' => $this->faker->randomElement(['360', '364', '365']),
            'coupon_interest' => $this->faker->numberBetween(0, 100)
        ];
    }
}
