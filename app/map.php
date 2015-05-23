<?php namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Map extends Model 
{
    // does nothing more than 
    // specify the table in the database
    protected $table = 'maps';
   
 public function posts()
    {
        return $this->hasMany('App\Post', 'posts_id');
    }
    public function reviews()
    {
        return $this->hasMany('App\Review', 'review_id');
    }

}

?>