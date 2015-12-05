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
        'description' => 'Site Administrator',
      ]);
      Role::create([
        'name' => 'user',
        'display_name' => 'User',
        'description' => 'Registered User',
      ]);
      Role::create([
        'name' => 'guest',
        'display_name' => 'Guest',
        'description' => 'Guest User',
      ]);
    }
}
