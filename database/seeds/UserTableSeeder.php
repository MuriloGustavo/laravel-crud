<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Murilo Gustavo',
        	'email' => 'murilogustavo98@gmail.com',
        	'password' => bcrypt('12345')
        ]);
    }
}
