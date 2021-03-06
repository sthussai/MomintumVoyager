<?php

use App\Event;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Event::create([
            'name' => 'Camping in Camrose',
            'description' => 'Join us for an epic camping experience.',
            'type' => 'event',
            'cost' => '50',
            'owner_id' => '4',
            'url' => 'https://www.w3schools.com/w3images/woods.jpg',
            'start_date' => '2020-02-02',
            'end_date' => '2020-02-03'
        ]);

        Event::create([
            'name' => 'Road Trip to BC',
            'description' => 'Join us for an epic roading experience.',
            'type' => 'event',
            'cost' => '20',
            'owner_id' => '4',
            'url' => 'https://www.w3schools.com/w3images/la.jpg',
            'start_date' => '2020-03-02',
            'end_date' => '2020-03-03'
        ]);

        Event::create([
            'name' => 'Volunteering at the Food Bank',
            'description' => 'Join us to help feed the poor and needy.',
            'type' => 'event',
            'cost' => '5',
            'owner_id' => '4',
            'url' => 'https://www.w3schools.com/w3images/coffeehouse.jpg',
            'start_date' => '2020-03-02',
            'end_date' => '2020-03-03'
        ]);

        Event::create([
            'name' => 'Trip to Elk Island',
            'description' => 'Join us at Elk Island National Park.',
            'type' => 'event',
            'cost' => '10',
            'owner_id' => '4',
            'url' => 'https://www.w3schools.com/w3images/woods.jpg',
            'start_date' => '2020-03-02',
            'end_date' => '2020-03-03'
        ]);
    }
}
