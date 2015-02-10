<?php

class Post extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];
        protected $table = 'posts';

	// Don't forget to fill this array
	protected $fillable = [];
        
        public function user(){
            return $this->belongsTo('User');
        }

}