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
          'password' => Hash::make('Aleksandras')
        ]);

        User::create([
        'name' => 'Modestas',
        'email' => 'modestas@gmail.com',
        'password' => Hash::make('asModestas')
      ]);

    }
}
