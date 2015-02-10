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
        
        //Validation
        public static $rules = [
            'fname' => 'required|min:2',
            'lname' => 'required|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|confirmed',
            'password_confirmation' => 'required'
        ];
    
        public function isValid($input){
            
            $validation = Validator::make($input, static::$rules);
            if($validation->passes()){
//                $this->attributes['password'] = Hash::make($this->attributes['password']);
                return true;
            }
            
            $this->messages = $validation->messages();
            return false;
        }
        
        public function setPasswordAttribute($pass){
            $v = Validator::make(['password' => $pass], ['password' => 'required|min:4']);
            if($v->passes()) $this->attributes['password'] = Hash::make($pass);
        }
        
        //Relationships
        public function roles(){
            return $this->belongsToMany('Role')->withTimestamps();            
        }
        
        public function posts(){
            return $this->hasMany('Post');
        }
        
         //Roles
        public function hasRole($name){
            foreach($this->roles as $role){
                if($role->role == $name) return TRUE;
            }           
            return false;
        }
        
        public function assignRole($role){
            return $this->roles()->attach($role);
        }
        
        public function removeRole($role){
            return $this->roles()->detach($role);
        }
        
        public function showRoles(){            
            $roleName=array();
            foreach($this->roles as $role){
                $roleName[]=$role->role;
            }            
            return $roleName;
        }
        

}
