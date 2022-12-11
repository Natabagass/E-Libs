<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\Author;
use App\Models\User;
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


        // Book::factory(40)->create();

        // Testimonial::factory(4)->create();

        Category::create([
            'name' => 'Journal'
        ]);

        Category::create([
            'name' => 'Health'
        ]);

        Category::create([
            'name' => 'History'
        ]);

        Category::create([
            'name' => 'Kids'
        ]);

        Category::create([
            'name' => 'Science'
        ]);

        Book::create([
            'title' => 'Principles and Practice of Psychiatric Nursing',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse saepe, est, voluptatum tenetur quis quam itaque aut, rerum expedita nihil error magnam rem laboriosam neque reiciendis perspiciatis illo libero delectus.',
            'author' => 'Gail Wiscarz Stuart, Michele T. Laraia ',
            'link' => 'https://www.google.co.id/books/edition/Principles_and_Practice_of_Psychiatric_N/Y5_eslgHqlIC?hl=en&gbpv=0',
            'category_id' => '2',
            'author_id' => '1'
        ]);

        Book::create([
            'title' => 'Public Health Leadership: Putting Principles Into Practice',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse saepe, est, voluptatum tenetur quis quam itaque aut, rerum expedita nihil error magnam rem laboriosam neque reiciendis perspiciatis illo libero delectus.',
            'author' => 'Louis Rowitz',
            'link' => 'https://www.google.co.id/books/edition/Public_Health_Leadership/RekQlJPS85EC?hl=en&gbpv=0',
            'category_id' => '2',
            'author_id' => '1'
        ]);


        Book::create([
            'title' => 'Estonian Journal of Archaeology 2005',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse saepe, est, voluptatum tenetur quis quam itaque aut, rerum expedita nihil error magnam rem laboriosam neque reiciendis perspiciatis illo libero delectus.',
            'author' => 'Valter Lang, Virve Kurnitski',
            'link' => 'https://books.google.co.id/books?id=FTPtdjxkO5oC&printsec=frontcover&dq=journal&hl=id&sa=X&ved=2ahUKEwiv4r7mg9X7AhVM93MBHWYeBa8Q6AF6BAgKEAI#v=onepage&q=journal&f=false',
            'category_id' => '1',
            'author_id' => '2'
        ]);

        Book::create([
            'title' => 'The Lost City of Z - Kota Z yang Hilang',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse saepe, est, voluptatum tenetur quis quam itaque aut, rerum expedita nihil error magnam rem laboriosam neque reiciendis perspiciatis illo libero delectus.',
            'author' => 'David Grann',
            'link' => 'https://www.google.co.id/books/edition/The_Lost_City_of_Z_Kota_Z_yang_Hilang/7UhFDwAAQBAJ?hl=id&gbpv=0',
            'category_id' => '3',
            'author_id' => '2'
        ]);


        Book::create([
            'title' => 'The Everything KIDS Book of Outrageous Facts',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse saepe, est, voluptatum tenetur quis quam itaque aut, rerum expedita nihil error magnam rem laboriosam neque reiciendis perspiciatis illo libero delectus.',
            'author' => 'Beth L. Blair',
            'link' => 'https://www.google.co.id/books/edition/The_Everything_KIDS_Book_of_Outrageous_F/v-jrDQAAQBAJ?hl=id&gbpv=0',
            'category_id' => '4',
            'author_id' => '3'
        ]);

        Book::create([
            'title' => 'An Introduction to Orthodontics',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse saepe, est, voluptatum tenetur quis quam itaque aut, rerum expedita nihil error magnam rem laboriosam neque reiciendis perspiciatis illo libero delectus.',
            'author' => 'Laura Mitchell, Simon J. Littlewood, Bridget Doubleday, Zararna L. Nelson-Moon ',
            'link' => 'https://www.google.co.id/books/edition/An_Introduction_to_Orthodontics/JyX_KnXDEz8C?hl=en&gbpv=1&dq=An+Introduction+to+Orthodontics&printsec=frontcover',
            'category_id' => '5',
            'author_id' => '3'
        ]);

        Author::create([
            'name' => 'Laura Mitchell',
            'tanggal_lahir'=> '1990-12-10',
            'alamat'=> 'Toronto, Amerika Serikat',
        ]);

        Author::create([
            'name' => 'Simon J. Littlewood',
            'tanggal_lahir'=> '1995-3-20',
            'alamat'=> 'Ohio, Amerika Serikat',
        ]);

        Author::create([
            'name' => 'Bridget Doubleday',
            'tanggal_lahir'=> '1980-5-3',
            'alamat'=> 'Jakarta, Norwegia',
        ]);

        // User::create([
        //     'first_name' => 'nata',
        //     'last_name' => 'bagas',
        //     'phone' => '08912341514',
        //     'email' => 'natabagas@gmail.com',
        //     'password'=>'123456789',
        // ]);

    }
}