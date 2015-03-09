<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create([
			'username'=>'admin', 'fullname'=>'Administrator', 'email'=>'admin@mail.com', 'password'=>Hash::make('admin123'), 'avatar_path'=>'images/avatar/1_admin_avatar.jpg'
		]);

		User::create([
			'username'=>'didit', 'fullname'=>'Praditha Hidayat', 'email'=>'praditha.hidayat@inmagine.com', 'password'=>Hash::make('didit123'), 'avatar_path'=>'images/avatar/2_didit_avatar.jpg'
		]);
	}

}