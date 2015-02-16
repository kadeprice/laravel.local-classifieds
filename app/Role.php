<?php namespace Classifieds;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

	protected $fillable = ['role'];
        protected $table = 'roles';
        
        public function test(){
            return "TEST";
        }
        
        static function getRoles(){
            $roles=Role::all();
            return $roles;
            $role=[];
            foreach($roles as $r){
                $role[$r->id]=$r->role;
            }
            return $role;
        }
        
        static function getAssignedRoles($id){
            $user = User::withTrashed()->find($id);
            $service=array();
            
            foreach($user->Roles as $r){
                $service[]=$r->id;
            }
            return $service;
        }
}