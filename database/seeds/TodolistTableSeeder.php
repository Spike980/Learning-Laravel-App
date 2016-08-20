<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Todolist;

class TodolistTableSeeder extends Seeder {


    /**
     * run
     *
     * @access public
     * @return void
     
    public function run() {
        Todolist::create(['name' => 'New Delhi Vacation',
                          'description' => 'Things to do before leaving'
                          ]);

        Todolist::create(['name' => 'Goto Bangalore',
                         'description' => 'Find a good job there'
                         ]);

        Todolist::create(['name' => 'Make HiiCiti',
                         'description' => 'Make the website useful'
                         ]);
    } // End function run
    */

    public function run() {
        $faker = \Faker\Factory::create();

        Todolist::truncate();

        foreach(range(1,50) as $index) {
            Todolist::create([
                            'name' => $faker->sentence(2),
                            'description' => $faker->sentence(4)
                            ]);
        }

    }

}

