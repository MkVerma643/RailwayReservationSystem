<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('admin')->insert(['name'=>'Admin','email'=>'admin@rrs.com',
            'password'=>\Illuminate\Support\Facades\Hash::make('admin')]);

        DB::table('users')->insert(['name'=>'Mukesh','email'=>'ixltech.mukesh@gmail.com',
            'password'=>\Illuminate\Support\Facades\Hash::make('123456789')]);

        DB::table('train')->insert(['tnumber'=>'123','trainname'=>'Rajdhani Express- Mumbai Central to Delhi',
            'totalticket'=>'10' ]);
        DB::table('train')->insert(['tnumber'=>'234','trainname'=>'Duronto Express - Mumbai Central to Ernakulum',
            'totalticket'=>'50' ]);
        DB::table('train')->insert(['tnumber'=>'345','trainname'=>'Geetanjali Express - CST to Kolkata',
            'totalticket'=>'100' ]);
        DB::table('train')->insert(['tnumber'=>'456','trainname'=>'Garib Rath - Udaipur to Jammu Tawi',
            'totalticket'=>'5']);

        DB::table('news')->insert(['title'=>'Ticket Booking Service','description'=>'All You Need To Know About Indian Railways Tatkal Ticket Booking Service' ]);
        DB::table('news')->insert(['title'=>'Ticket Booking Process Explained Here','description'=>'can do reservation online through this Portal' ]);

        DB::table('question')->insert(['question'=>'Passenger Name' ]);
        DB::table('question')->insert(['question'=>'Passenger Age' ]);
        DB::table('question')->insert(['question'=>'Mobile Number' ]);


    }
}
