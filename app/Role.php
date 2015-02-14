<?php

class Role extends \Eloquent {
	protected $fillable = ['role'];
        protected $table = 'roles';
        
        static function getRoles(){
            $roles=Role::all();
            $role=array();
            foreach($roles as $r){
                $role[$r->id]=$r->roles;
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