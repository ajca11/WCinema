<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('reservations')->delete();
        \DB::table('reservations')->insert([
            [
                'movie_id' => 1,
                'time_slot' => '12:00',
                'tickets' => 2,
                'cinema_room' => 1,
                'name' => 'Cappucina Ballerina',
                'contact_number' => '09632184218',
                'email' => 'capballrina@gmail.con',
                'payment_method' => 'Online Payment',
            ],
            [
                'movie_id' => 1,
                'time_slot' => '15:00',
                'tickets' => 1,
                'cinema_room' => 1,
                'name' => 'Bombardino Crocodillo',
                'contact_number' => '09391246712',
                'email' => 'bcroc@gmail.con',
                'payment_method' => 'Online Payment',
            ],
        ]);
    }
}
