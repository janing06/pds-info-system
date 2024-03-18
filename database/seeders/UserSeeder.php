<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		DB::table('users')->insert(
			[
				'id'  								=> 1,
				'first_name'      				=> 'Admin',
				'last_name'      					=> 'Admin',
				'email'     						=> 'test@test.com',
				'role'     							=> 'admin',
				'status'     						=> 'active',
				'password'  						=> Hash::make('12345678'),
				'email_verified_at' 				=> Carbon::now(),
				'created_at' 						=> Carbon::now(),
				'updated_at' 						=> Carbon::now(),
			]
		);
	}
}
