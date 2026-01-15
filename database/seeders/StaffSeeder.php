<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff::create([
            'name' => 'Jean Dupont',
            'role_key' => 'president',
            'photo_path' => 'https://images.pexels.com/photos/3755440/pexels-photo-3755440.jpeg?auto=compress&cs=tinysrgb&w=400',
            'email' => 'jean.dupont@example.com',
            'phone' => '+261 34 00 000 01',
            'is_visible' => true,
        ]);

        Staff::create([
            'name' => 'Marie Martin',
            'role_key' => 'coach',
            'photo_path' => 'https://images.pexels.com/photos/674010/pexels-photo-674010.jpeg?auto=compress&cs=tinysrgb&w=400',
            'email' => 'marie.martin@example.com',
            'phone' => '+261 34 00 000 02',
            'is_visible' => true,
        ]);

        Staff::create([
            'name' => 'Alexandre Durand',
            'role_key' => 'staff',
            'photo_path' => 'https://images.pexels.com/photos/841130/pexels-photo-841130.jpeg?auto=compress&cs=tinysrgb&w=400',
            'email' => 'alexandre.durand@example.com',
            'phone' => '+261 34 00 000 03',
            'is_visible' => true,
        ]);
    }
}
