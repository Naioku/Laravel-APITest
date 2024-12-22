<?php

namespace Database\Factories;

use App\Enums\Type;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\en_US\Address;

/**
 * @extends Factory<Customer>
 */
class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(Type::values());
        $name = $type == Type::Individual->value ? $this->faker->name() : $this->faker->company();

        return [
            'name' => $name,
            'type' => $type,
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'state' => Address::state(),
            'postal_code' => $this->faker->postcode()
        ];
    }
}
