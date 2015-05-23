<?php namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Image extends Model 
{
    // does nothing more than 
    // specify the table in the database
    protected $table = 'images';

  public function albums()
    {
        return $this->belongsTo('App\Album');
    }

    public function imagespost()
    {
        return $this->belongsTo('App\Post');
    }
     public function imagesreview()
    {
        return $this->belongsTo('App\Review');
    }
}
?>