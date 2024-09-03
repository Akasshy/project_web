<?php

namespace Database\Factories;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * 
     * 
     */
    protected $model = Produk::class;
    public function definition(): array
    {
        return [
            'name_product' => $this->faker->word(),
            'stok' => $this->faker->numberBetween(1, 100),
            'deskripsi' => $this->faker->paragraph(),
            'foto_product' => $this->faker->imageUrl(640, 480, 'product', true),
            'kategori' => $this->faker->word(),
            'harga' => $this->faker->randomFloat(2, 1000, 10000), // Harga antara 1000 hingga 10000 dengan 2 desimal
        ];
    }
}
