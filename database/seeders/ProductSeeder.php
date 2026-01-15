<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Maillot officiel',
            'price' => 25,
            'sizes' => ['XS', 'S', 'M', 'L', 'XL'],
            'colors' => ['Orange', 'Blanc', 'Noir'],
            'images' => [
                'https://images.pexels.com/photos/972956/pexels-photo-972956.jpeg?auto=compress&cs=tinysrgb&w=800',
                'https://images.pexels.com/photos/114296/pexels-photo-114296.jpeg?auto=compress&cs=tinysrgb&w=800',
            ],
            'category' => 'Textile',
            'is_published' => true,
        ]);

        Product::create([
            'name' => "T-shirt d'entraînement",
            'price' => 15,
            'sizes' => ['S', 'M', 'L', 'XL'],
            'colors' => ['Orange', 'Noir'],
            'images' => [
                'https://images.pexels.com/photos/140555/pexels-photo-140555.jpeg?auto=compress&cs=tinysrgb&w=800',
                'https://images.pexels.com/photos/257970/pexels-photo-257970.jpeg?auto=compress&cs=tinysrgb&w=800',
            ],
            'category' => 'Textile',
            'is_published' => true,
        ]);

        Product::create([
            'name' => 'Sweat à capuche',
            'price' => 35,
            'sizes' => ['S', 'M', 'L', 'XL'],
            'colors' => ['Noir'],
            'images' => [
                'https://images.pexels.com/photos/6311579/pexels-photo-6311579.jpeg?auto=compress&cs=tinysrgb&w=800',
                'https://images.pexels.com/photos/7671166/pexels-photo-7671166.jpeg?auto=compress&cs=tinysrgb&w=800',
            ],
            'category' => 'Textile',
            'is_published' => true,
        ]);
    }
}
