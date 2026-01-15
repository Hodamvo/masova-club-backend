<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'title' => 'Tournoi U12 de printemps',
            'date' => '2025-04-15',
            'location' => 'Gymnase municipal',
            'category' => 'Tournoi jeunes',
            'cover_image' => 'https://images.pexels.com/photos/3621104/pexels-photo-3621104.jpeg?auto=compress&cs=tinysrgb&w=800',
            'description' => 'Un tournoi amical réunissant plusieurs clubs de la région pour nos catégories U12.',
            'gallery_images' => [
                'https://images.pexels.com/photos/3651757/pexels-photo-3651757.jpeg?auto=compress&cs=tinysrgb&w=800',
                'https://images.pexels.com/photos/995764/pexels-photo-995764.jpeg?auto=compress&cs=tinysrgb&w=800',
            ],
            'youtube_ids' => ['tAGnKpE4NCI'],
            'is_upcoming' => true,
        ]);

        Event::create([
            'title' => 'Journée portes ouvertes',
            'date' => '2025-06-10',
            'location' => 'Terrain extérieur MASÔVA',
            'category' => 'Découverte',
            'cover_image' => 'https://images.pexels.com/photos/1104014/pexels-photo-1104014.jpeg?auto=compress&cs=tinysrgb&w=800',
            'description' => "Venez découvrir le club, rencontrer les coachs et participer à des ateliers d'initiation.",
            'gallery_images' => [
                'https://images.pexels.com/photos/209956/pexels-photo-209956.jpeg?auto=compress&cs=tinysrgb&w=800',
            ],
            'youtube_ids' => null,
            'is_upcoming' => true,
        ]);

        Event::create([
            'title' => 'Gala de fin de saison',
            'date' => '2024-07-20',
            'location' => 'Salle polyvalente',
            'category' => 'Cérémonie',
            'cover_image' => 'https://images.pexels.com/photos/1331796/pexels-photo-1331796.jpeg?auto=compress&cs=tinysrgb&w=800',
            'description' => 'Un moment convivial pour clôturer la saison avec toutes les catégories du club.',
            'gallery_images' => [
                'https://images.pexels.com/photos/1142968/pexels-photo-1142968.jpeg?auto=compress&cs=tinysrgb&w=800',
            ],
            'youtube_ids' => ['dQw4w9WgXcQ'],
            'is_upcoming' => false,
        ]);
    }
}
