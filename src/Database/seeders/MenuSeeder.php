<?php

namespace Database\Seeders;

use Naykel\Navit\Models\Menu;
use Naykel\Navit\Models\Link;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /** -----------------------------------------------------------------
         * Create links (menu items)
         * ------------------------------------------------------------------
         */

        $home = Link::create(['name' => 'Home', 'route_name' => 'home', 'url' => '/']);
        $faqs = Link::create(['name' => 'FAQ\'s', 'route_name' => 'faqs', 'url' => '/faqs',  'order' => 16]);
        $about = Link::create(['name' => 'About Us', 'route_name' => 'about', 'url' => '/about', 'order' => 18]);
        $contact = Link::create(['name' => 'Contact Us', 'route_name' => 'contact', 'url' => '/contact', 'order' => 20]);
        $privacy = Link::create(['name' => 'Privacy Policy', 'route_name' => 'privacy', 'url' => '/privacy-policy']);
        $terms = Link::create(['name' => 'Terms of Use', 'route_name' => 'terms', 'url' => '/terms-of-use']);

        $admin = Link::create(['name' => 'Admin', 'route_name' => 'admin', 'url' => '/admin']);
        $pages = Link::create(['name' => 'Pages', 'route_name' => 'pages', 'url' => '/pages']);
        $telescope = Link::create(['name' => 'Telescope', 'route_name' => 'telescope', 'url' => '/telescope']);

        /** -----------------------------------------------------------------
         * Create menus and attach links (seeds pivot table)
         * ------------------------------------------------------------------
         */
        Menu::create(['name' => 'Main', 'description' => 'Main site navigation'])->links()->attach([$home->id, $faqs->id, $about->id, $contact->id]);
        Menu::create(['name' => 'Admin', 'description' => 'Administration navigation'])->links()->attach([$telescope->id]);
        Menu::create(['name' => 'Info', 'description' => 'Site information links'])->links()->attach([$home->id, $privacy->id, $terms->id]);
        Menu::create(['name' => 'Dev', 'description' => 'DEV links'])->links()->attach([$pages->id, $telescope->id, $admin->id]);
    }
}
