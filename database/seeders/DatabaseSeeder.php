<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\User;
use App\Models\PropertyEnquire;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Location::factory(10)->create();
        // \App\Models\Property::factory(50)->create();
        // \App\Models\Media::factory(500)->create();
        // \App\Models\PropertyEnquire::factory(50)->create();

        //-------- for static page ---------------
            $user = new User();
            $user->name = 'Tfx-Admin';
            $user->email = 'tfx.webmaster@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('Admin@2023');
            $user->remember_token = Str::random(10);
            $user->save();

            $page = new Page();
            $page->name = 'Contact Us';
            $page->slug = 'contact-us';
            $page->content = 'ai.fx.intel@gmail.com';
            $page->save();

            $page = new Page();
            $page->name = 'About Us';
            $page->slug = 'about-us';
            $page->content = 'Love developing with Laravel';
            $page->save();
        //------------ or ------------------
            // User::create([
            //     'name'  => 'Shadhin Ahmed',
            //     'email' => 'shadhinplanet@gmail.com',
            //     'password'=> Hash::make('123'),
            // ]);

            // Page::create([
            //     'name'  => 'Contact Us',
            //     'slug'  => 'contact-us',
            //     'content'=> 'Lorem ipsum dolor, sit amet llam quae incidunt quos dolor, totam rem cumque aliquam,'
            // ]);
            // Page::create([
            //     'name'  => 'About Us',
            //     'slug'  => 'about-us',
            //     'content'=> 'Lorem ipsum dolor, sit possimus assumenda dolorem veritatis aperiam! Necessitatibus.'
            // ]);


    }
}
