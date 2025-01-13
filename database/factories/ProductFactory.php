<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * $table->id();
            $table->string("name");
            $table->text("description");
            $table->string("slug");
            $table->string("image");
            $table->string("price");
            $table->string("old_price")->nullable();
            $table->string("category_id");
            $table->string("user_id");
            $table->string("rating");
            $table->enum("status",["pending","active","cancelled"])->default("pending");
     */
    public function definition(): array
    {
        $statusValues = ["pending","active","cancelled"];
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->paragraph(10),
            'slug' => $this->faker->slug,
            'image'=> "https://picsum.photos/300/300",
            'price'  => $this->faker->numberBetween(500,10000),
            'old_price'=> $this->faker->numberBetween(1000,20000),
            'category_id'=> $this->faker->numberBetween(1,5),
            'user_id' => $this->faker->numberBetween(1,5),
            'rating' => $this->faker->numberBetween(0,5),
            'status' => $this->faker->randomElement($statusValues),
        ];
    }
}
