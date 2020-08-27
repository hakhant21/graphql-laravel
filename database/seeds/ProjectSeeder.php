<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'title'  => "Marketing Book" ,
            'author' => "Bill Gates",
            'image' =>  "billgate.jpg",
            'description' => 'this is bill gates marketing books',
            'link' =>  'https://www.books.com/marketing',
            'category_id' => '1'
        ]);

        Project::create([
            'title'  => "Finance Book" ,
            'author' => "Bill Gates",
            'image' =>  "billgate.jpg",
            'description' => 'this is bill gates finance books',
            'link' =>  'https://www.books.com/finance',
            'category_id' => '2'
        ]);

        Project::create([
            'title'  => "Management Book" ,
            'author' => "Bill Gates",
            'image' =>  "billgate.jpg",
            'description' => 'this is bill gates management books',
            'link' =>  'https://www.books.com/management',
            'category_id' => '3'
        ]);

        Project::create([
            'title'  => "Laravel Tutorial" ,
            'author' => "Brad Travesry",
            'image' =>  "bradtravesry.jpg",
            'description' => 'this is travesry media laravel complete series for my dummy data testing.travesry media is a best channels when its come to web development',
            'link' =>  'https://www.travesrymedia.com',
            'category_id' => '4'
        ]);
    }
}
