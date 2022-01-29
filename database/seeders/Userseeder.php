<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\HASH;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'=>'ahmad',
            'email'=>'llad@llod.com',
            'password'=>Hash::make('156468'),
        ]);
        // DB::table('users')->insert([
        //     'name'=>'bilal',
        //     'email'=>'lak@spod.com',
        //     'password'=>Hash::make('12345'),
        // ]);

    }
}
