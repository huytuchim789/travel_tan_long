<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('admins')->insert(
            ['name'=>'admin','email' => 'admin@gmail.com', 'password' => Hash::make('12345678'),'phone'=>NULL,'status'=>1,'created_at'=>'2019-07-25 18:00:00', 'updated_at'=>'2019-07-25 18:00:00']
        );
    }
}
