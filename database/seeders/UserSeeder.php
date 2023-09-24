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
        //
        User::create([
            'name'=>'ahmed thabet',
            'email'=>'ahmed@store.com',
            'passowrd'=>Hash::make('password'),
            'phone_number'=>'01141992019'
        ]);
    }
}
