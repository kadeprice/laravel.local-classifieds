<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
        protected $fillable = ['fname', 'lname', 'password', 'email','password_confirmation'];
        
        public function setPasswordAttribute($pass){
            $v = Validator::make(['password' => $pass], ['password' => 'required|min:4']);
            if($v->passes()) $this->attributes['password'] = Hash::make($pass);
        }

}
