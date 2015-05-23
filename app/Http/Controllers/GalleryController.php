<?php namespace App\Http\Controllers;

use View;
use App\image;
use App\album;

class GalleryController extends Controller {

protected $layout = 'layouts.default';


public function ShowAll() {
    $albums = Album::with('images')->orderBy('id')->get();
  return View::make('pages.gallery')->with('albums', $albums);
}
public function ShowById($id) {
      $ids = Album::with('images')->where('id', $id)->get();
   return View::make('pages.gallery')->with('ids', $ids);
}
}