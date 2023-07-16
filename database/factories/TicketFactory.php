<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Event;
use App\Models\Purchase;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(['general', 'especial', 'vip']);

        return [
            'event_id' => Event::factory(),
            'purchase_id' => Purchase::factory(),    
            'type' => $type,
            'barcode' => $this->faker->ean13(),
            'seat' => $this->faker->numberBetween(1,100),
        ];
    }
}
