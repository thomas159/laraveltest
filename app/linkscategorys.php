<?php namespace App;

use Illuminate\Database\Eloquent\Model;
 
class LinksCategorys extends Model 
{
    protected $table = 'linkscategorys';

  public function linksitems()
    {
        return $this->hasMany('App\LinksItems', 'category_id');
    }
}
?>