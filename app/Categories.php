<?php namespace Classifieds;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model {
// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];
        protected $table = 'categories';

        
	// Don't forget to fill this array
	protected $fillable = ['category'];
        
        public function post(){
            return $this->belongsTo('\Classifieds\Post');
        }

}
