<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            [
                'name' => 'Mark Otto',
                'email' => 'mark.otto@example.com',
                'phone_number' => '123-456-7890',
                'username' => 'markotto',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Jacob Thornton',
                'email' => 'jacob.t@example.com',
                'phone_number' => '098-765-4321',
                'username' => 'jacobt',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'phone_number' => '555-555-5555',
                'username' => 'johnd',
                'password' => bcrypt('password'),
            ],
        ]);
    }
}
