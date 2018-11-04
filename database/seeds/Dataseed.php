<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class Dataseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'name' => 'Company 1',
                'tel' => '1234',
                'email' => 'info@company1.com',
                'address' => 'cairo,egypt',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Company 2',
                'tel' => '5678',
                'email' => 'info@company2.com',
                'address' => 'alex,egypt',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
        DB::table('admins')->insert([
            [
                'name' => 'Abdelrahman Waref',
                'email' => 'admin@admin.com',
                'phone' => '01007439676',
                'password' => Hash::make('secret'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
          
        ]);
        DB::table('users')->insert([
            [
                'name' => 'Sara Mohamed',
                'email' => 'sara@femto15.com',
                'phone' => '123455',
                'company_id' => '1',
                'password' => Hash::make('secret'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ahmed Mohamed',
                'email' => 'ahmed@femto15.com',
                'phone' => '532342',
                'company_id' => '2',
                'password' => Hash::make('secret'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
