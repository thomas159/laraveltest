<?php namespace App;

use Illuminate\Database\Eloquent\Model;
 
class LinksItems extends Model
{
    protected $table = 'linksitems';

  public function linkscategorys()
    {
        return $this->belongsTo('App\LinksCategorys');
    }
}
?>