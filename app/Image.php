<?php namespace Classifieds;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {
    protected $fillable = ['url, post_id'];
    protected $table = 'images';

    public function post(){
        $this->belongsTo('\Classifieds\Post');
    }
    
    /**
     * Gets all the images and returns HTML formatted text.
     * @return type string
     */
    static function getImages($post_id, $type=null){
        $post = Post::find($post_id);
        $html = "<div class='container-fluid'><div class='row'>";
        $i=0;
        foreach($post->images as $image){
            $i++;
            if(($i % 4) == 0){
                $html .="</div>"; //Close row
                $html .="<div class='row'><br/>"; //New Row
                $i=0;
            }
            if($type == 'edit') $edit_html = "<a href='#'><div id='$image->id' class='delete_image'> {delete} </div></a>";
            else $edit_html = "";
            $html .= "<div class='col-md-4'>$edit_html<img src='". \Illuminate\Support\Facades\URL::to('images/posts/'.$image->url) ."' /> </div>";
        }
        $html .="</div></div>"; //close row and container
        return $html;
    }


}
