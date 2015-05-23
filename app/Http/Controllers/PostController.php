<?php namespace App\Http\Controllers;

use View;
use App\post;
use App\map;

class PostController extends Controller {

protected $layout = 'layouts.default';

public function ShowAll() {
       $posts = Post::with('maps')->orderBy('id')->paginate(3);
   return View::make('pages.blog')->with('posts', $posts);
}
public function ShowById($id) {
      $ids = Post::with('postimages','maps')->where('id', $id)->get();
   return View::make('pages.blog')->with('ids', $ids);
}
public function ShowByMonth($month) {
    $months = Post::where('month', $month)->orderBy('id')->paginate(3);
    return View::make('pages.blog') ->with('months', $months);

}
}