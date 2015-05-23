<?php 
class TestController extends BaseController {

protected $layout = 'layouts.default';


public function ShowAll() {
    $posts = Post::with('maps')->orderBy('id')->get();
   return $this->layout->content = View::make('pages.test')->with('posts', $posts);

dd(Post::with('maps')->get());
}

}
