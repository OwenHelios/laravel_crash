<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'Laravel, javascript',
        //     'company' => 'ACME Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque tempore fuga eveniet porro quisquam excepturi libero quaerat dignissimos ea ut.',
        // ]);

        // Listing::create([
        //     'title' => 'React Senior Developer',
        //     'tags' => 'React, javascript',
        //     'company' => 'Facebook Corp',
        //     'location' => 'Palo Alto, CA',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.reactjs.com',
        //     'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque tempore fuga eveniet porro quisquam excepturi libero quaerat dignissimos ea ut.',
        // ]);
    }
}
