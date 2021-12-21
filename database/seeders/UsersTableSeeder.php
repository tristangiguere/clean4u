<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Admin;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
           'email'      =>      'ludovic@mozart.com',
           'password'   =>      Hash::make('password'),
           'remember_token' =>  str_random(10),
        ]);
    }
}
