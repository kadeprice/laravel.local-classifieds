<?php namespace Classifieds;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['fname', 'lname', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];
        public $rules = [
            'fname' => 'required|min:2',
            'lname' => 'required|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|confirmed',
            'password_confirmation' => 'required'
        ];
        
         //Relationships
        public function roles(){
            return $this->belongsToMany('\Classifieds\Role');            
        }
        
        public function posts(){
            return $this->hasMany('\Classifieds\Post');
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
        
        
        public function setPasswordAttribute($pass){
            $this->attributes['password'] = \Illuminate\Support\Facades\Hash::make($pass);
        }
        

}
