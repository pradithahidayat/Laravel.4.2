<?php namespace Services\Validators;

class User extends Validator {
	public static $rules = [
		'username'					=>	'required|unique:users,username', 
		'fullname'					=>	'required', 
		'email'						=>	'required|email|unique:users,email', 
		'password'					=>	'required|min:3|confirmed', 
		'password_confirmation'		=>	'required|min:3',
		'old_password'				=>	'required_with:new_password,new_password_confirmation|min:3|confirmed', 
		'new_password'				=>	'required|min:3|confirmed', 
		'new_password_confirmation'	=>	'required|min:3',
		'avatar'					=>	'max:5000|mimes:jpg,jpeg,gif'
	];

	public static $customAttributeName = [
		'username'					=>	'User Name',
		'fullname'					=>	'Full Name',
		'email'						=>	'E-Mail',
		'password'					=>	'Password',
		'password_confirmation'		=>	'Confirm Password',
		'old_password'				=>	'Old Password',
		'new_password'				=>	'New Password',
		'new_password_confirmation'	=>	'New Confirm Password',
		'avatar'					=>	'Avatar'
	];
}