<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\Stakeholder;
use App\Models\Admin;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Web Programming',
            'stakeholder_id' => 1
        ]);
        
        Category::create([
            'name' => 'Anime',
            'stakeholder_id' => 2
        ]);

        Category::create([
            'name' => 'Personal',
            'stakeholder_id' => 3
        ]);

        Stakeholder::create([
            'name' => 'Stakeholder 1'
        ]);
        
        Stakeholder::create([
            'name' => 'Stakeholder 2'
        ]);

        Stakeholder::create([
            'name' => 'Stakeholder 3'
        ]);

        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123'
        ]);

        Book::factory(40)->create();

        Testimonial::factory(4)->create();
    }
}