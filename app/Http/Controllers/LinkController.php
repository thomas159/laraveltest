<?php namespace App\Http\Controllers;

use View;
use App\link;
use App\linkscategorys;
use App\linkitems;

class LinkController extends Controller {

public function ShowAll() {
    $links = LinksCategorys::with('linksitems')->orderBy('id')->get();
  
    return View::make('pages.links')
               ->with('links', $links);

}
}