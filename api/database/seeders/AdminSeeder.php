<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           [
            'name' => 'Admin',
            'surname' => 'Seeu1',
            'email' => 'admin1@seeu.edu.mk',
            'password' =>  Hash::make('12345678'), // password (12345678)
            'remember_token' => Str::random(10),
            'role_id' => 1 //only admins 
           ],
           [
            'name' => 'Admin',
            'surname' => 'Seeu2',
            'email' => 'admin2@seeu.edu.mk',
            'password' =>  Hash::make('12345678'), // password (12345678)
            'remember_token' => Str::random(10),
            'role_id' => 1 //only admins 
           ]
        ]);
    }
}
