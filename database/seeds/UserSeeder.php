<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
          'name' => 'Aleksandras',
          'email' => 'aleksandrnarusevic1@gmail.com',
          'password' => bcrypt('Aleksandras') //can put passwords into env file
        ]);

        User::create([
        'name' => 'Modestas',
        'email' => 'modestas@gmail.com',
        'password' => bcrypt('asModestas') //can put passwords into env file
      ]);

    }
}
