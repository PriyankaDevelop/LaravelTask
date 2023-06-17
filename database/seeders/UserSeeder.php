<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'first_name' => 'Priyanka',
                'last_name' => 'Kumari',
                'mobile' => '9898989898',
                'email' => 'priyanka123@gmail.com',
                'address' => 'Shahganj Agra',
                'pincode' => '282010',
                'city' => 'Agra',
                'password' => bcrypt('password1'),
            ],
            [
                'first_name' => 'Ayush',
                'last_name' => 'Kumar',
                'mobile' => '22871281',
                'email' => 'ayush123@gmail.com',
                'address' => '1,107/1, Gopal Mahal Bld, 1st Flr, Gundopanth Street',
                'pincode' => '560053',
                'city' => 'Bangalore',
                'password' => bcrypt('password2'),
            ],
            [
                'first_name' => 'Prisha',
                'last_name' => 'Kumari',
                'mobile' => '04023543911',
                'email' => 'prisha123@gmail.com',
                'address' => '8-2-326/a, Banjara Hills',
                'pincode' => '500034',
                'city' => 'Hyderabad',
                'password' => bcrypt('password3'),
            ],
            [
                'first_name' => 'Sani',
                'last_name' => 'Kumar',
                'mobile' => '02223858854',
                'email' => 'sani123@gmail.com',
                'address' => '14, Pandurang Bhavan, 2nd Carpenter Street, Girgaon',
                'pincode' => '400004',
                'city' => 'Mumbai',
                'password' => bcrypt('password4'),
            ],
            [
                'first_name' => 'Ravi',
                'last_name' => 'Kumar',
                'mobile' => '2224928459',
                'email' => 'ravi123@gmail.com',
                'address' => 'Regent Towers, Opp Income Tax Office',
                'pincode' => '390007',
                'city' => 'Vadodara',
                'password' => bcrypt('password5'),
            ],
        ];

        User::insert($users);

    }
}
