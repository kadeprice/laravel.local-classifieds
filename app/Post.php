<?php namespace Classifieds;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];
        protected $table = 'posts';

        public function test(){ return "TEST"; }
        
	// Don't forget to fill this array
	protected $fillable = [];
        
        public function user(){
            return $this->belongsTo('\Classifieds\User');
        }

}