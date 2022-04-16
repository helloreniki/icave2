<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

          // MANUALLY ADD USERS (super = true for statamic)
          $user = new User();
          $user->name = 'Renata';
          $user->email = 'hello@reniki.com';
          $user->password = \Hash::make('skrajnicas');
          $user->super = true;
          $user->save();

    }
}
