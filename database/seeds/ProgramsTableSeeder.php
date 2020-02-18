<?php

use App\Program;
use Illuminate\Database\Seeder;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Program::create([
            'name' => 'Momintum',
            'title' => 'Momintum Mastermind',
            'subheading' => 'Build confidence',
            'subheading2' => 'Learn leadership',
            'description' => 'Join us weekly for an epic experience.',
            'description2' => 'Lorem ipsum dolor sit amet.',
            'tag' => 'Certification',
            'url' => 'https://www.w3schools.com/w3images/woods.jpg',
        ]);

        Program::create([
            'name' => 'Adventure Program',
            'title' => 'Adventure Program',
            'subheading' => 'Subheading 1 for Adventure',
            'subheading2' => 'Subheading 2 for Adventure',
            'description' => 'Description for Adventure',
            'description2' => 'Description Second Line for Adventure',
            'tag' => 'New',
            'url' => 'https://www.w3schools.com/w3images/forestbridge.jpg',
        ]);

        Program::create([
            'name' => 'Leadership Program',
            'title' => 'Leadering Program',
            'subheading' => 'Leading for life',
            'subheading2' => 'Practical leadership',
            'description' => 'Leading with Justice In the Modern World',
            'description2' => 'Lorem ipsum dolor sit amet',
            'tag' => 'New',
            'url' => 'https://www.w3schools.com/w3images/coffee.jpg',
        ]);
    }
}
