<?php

namespace Database\Factories;

use App\Enums\Status;
use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Invoice>
 */
class InvoiceFactory extends Factory
{
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(Status::values());
        $billDate = $this->faker->dateTimeThisDecade();

        return [
            'customer_id' => Customer::factory(),
            'amount' => $this->faker->randomFloat(2, 100, 20000),
            'status' => $status,
            'billed_date' => $billDate,
            'paid_date' => $status === Status::Paid->value ? $this->faker->dateTimeBetween(startDate: $billDate) : null
        ];
    }
}
