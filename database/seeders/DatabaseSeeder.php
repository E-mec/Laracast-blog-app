<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id 
        ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolot menet thank you laravel frimpong almanac interested in nothing but chaos and violence and whatever that makes you bleed purple blood in the nose and through the osephagus but not through the skin because of too much mediocre during work hours and break time . Once again thank you Laravel and the producers of Laravel.'
        // ]);

        // Listing::create([
        //     'title' => 'Full-stack Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@gmail.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolot menet thank you laravel frimpong almanac interested in nothing but chaos and violence and whatever that makes you bleed purple blood in the nose and through the osephagus but not through the skin because of too much mediocre during work hours and break time . Once again thank you Laravel and the producers of Laravel.'
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
