<?php

class ContactsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Eloquent::unguard();
		//$this->call('ContactsTableSeeder');
		$contacts = [
			['first_name' => 'John',
			'last_name' => 'Doe',
			'email_address' => 'john@example.com',
			'description' => 'My best friend.'
			],
			[
			'first_name' => 'Jane',
			'last_name' => 'Doe',
			'email_address' => 'jane@example.com',
			'description' => 'My best friend\'s wife.'
			],
			[
			'first_name' => 'Moon',
			'last_name' => 'Kang',
			'email_address' => 'moon@example.com',
			'description' => 'Me.'
			]
		];
		DB::table('contacts')->insert($contacts);
	}
}