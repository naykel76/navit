<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NavitSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenuSeeder::class);           // creates basic menu items and links
        $this->call(PageSeeder::class);           // seeds main site pages without content
    }
}
