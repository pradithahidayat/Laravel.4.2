<?php

class User extends \Eloquent {
	protected $fillable = [
			'username', 'fullname', 'email', 'password'
		];
}