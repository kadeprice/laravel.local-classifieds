<?php namespace Classifieds;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	// Add your validation rules here
        protected $table = 'posts';

        public $rules = [
            'title' => 'required|min:3',
            'amount' => 'required|numeric|min:2',
            'body' => 'required|min:5'
        ];
        
        
	// Don't forget to fill this array
	protected $fillable = ['title','body','location','amount','user_id','category_id','active','aproved'];
        
        public function user(){
            return $this->belongsTo('\Classifieds\User');
        }
        
         public function category(){
            return $this->belongsTo('\Classifieds\Categories');
        }
        
        public static function approvedPosts(){
//            return "GET POSTS";
            return self::whereActive(true)->whereApproved(true)->orderBy('id', 'desc')->get();
        }
        
        public static function approve($id) {
            $post = Post::find($id);
            
            //make sure they own it
            if(\Illuminate\Support\Facades\Auth::id() != $post->user_id) return false;
            
            $post->approved = true;
            $post->save();
            return true;
        }
}