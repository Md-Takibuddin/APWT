<?php

namespace Database\Seeders;

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

        DB::table('cruds')->insert([
            'fname'=>'takib',
            'lname'=>'uddin',
            'email'=>'takib@gmail.com',
            'password'=>'1234',
            'phoneNumber'=>'01779011690',
            'Address'=>'312/16, K block, Banasree'
            ]);

            DB::table('cruds')->insert([
                'fname'=>'shipon',
                'lname'=>'uddin',
                'email'=>'shipon@gmail.com',
                'password'=>'abcd',
                'phoneNumber'=>'01548726541',
                'Address'=>'Badda, Dhaka'

                ]);

                DB::table('cruds')->insert([
                    'fname'=>'Rafio',
                    'lname'=>'uddin',
                    'email'=>'rafio@gmail.com',
                    'password'=>'1234',
                    'phoneNumber'=>'01723654875',
                    'Address'=>'Banasree,Dhaka'
                ]);


}
}
