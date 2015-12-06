<?php

use JoshGoodson\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Role::create([
        'name' => 'admin',
        'display_name' => 'Administrator',
        'description' => 'User is allowed to manage all resources',
      ]);
      Role::create([
        'name' => 'user',
        'display_name' => 'Registered User',
        'description' => 'User is allowed to use most public resources',
      ]);
      Role::create([
        'name' => 'guest',
        'display_name' => 'Guest User',
        'description' => 'User is allowed to use only the basic public resources',
      ]);
    }
}
