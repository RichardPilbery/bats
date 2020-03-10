<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name"=>"Admin User",
            "email"=>"admin@random.org",
            "email_verified_at"=>null,
            "password"=>bcrypt("admin"),
            "remember_token"=>null,
            "created_at"=>date("Y-m-d H:i:s"),
            "updated_at"=>date("Y-m-d H:i:s")
        ]);
    }
}
