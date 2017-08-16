<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        DB::table('users')->insert([
    		[
    			'name' => "Admin",
    			'email' => "rexsamso@gmail.com",
    			'password' => bcrypt('admin')
    		],
            [
                'name' => "user",
                'email' => "rexsamson@outlook.com",
                'password' => bcrypt('user')
            ],
    		[
    			'name' => "rexsamson",
    			'email' => "rexsamson@outlook.com",
    			'password' => bcrypt('cobadibaca')
    		]
            
    	]);
    }
}
