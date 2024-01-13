<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name'=>'abdallah',
            'last_name'=>'ashraf',
            'email'=> 'abdallahashraf0120@gmail.com',
            'password'=>Hash::make('password'),
            'is_admin'=>1,
            'address1'=>'50',
            'address2'=>'50',
            'city'=>'50',
            'country'=>'50',
            'pincode'=>'50'

        ]);
    }
}
