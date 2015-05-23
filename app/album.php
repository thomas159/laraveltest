<?php namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Album extends Model
{
    protected $table = 'albums';

  public function images()
    {
        return $this->hasMany('App\Image');
    }
}
?>