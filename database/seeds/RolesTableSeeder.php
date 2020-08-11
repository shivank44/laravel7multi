<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\Role::create([
            'name' => 'admin',
            'display_name' => 'Admin',
            'description' => 'Admin'
        ]);

        App\Role::create([
            'name' => 'teacher',
            'display_name' => 'Teacher',
            'description' => 'Teacher'
        ]);

        App\Role::create([
            'name' => 'student',
            'display_name' => 'Student',
            'description' => 'Student'
        ]);
    }
}
