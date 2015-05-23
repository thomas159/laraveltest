<?php namespace App\Http\Controllers;

use View;
use App\category;
use App\review;


class ReviewController extends Controller {

public function ShowAll() {
    $reviews = Review::with('categorys')->orderBy('id')->paginate(2);

    return View::make('pages.reviews')
               ->with('reviews', $reviews);
}        
public function ShowBySlug($cat,$slug) {
    $slugs = Review::with('reviewimages','maps','categorys')
     ->whereHas('categorys', function($q) use ($cat){
         $q->where('cat', $cat);
     })
     ->where('slug', $slug)
     ->get();
    return View::make('pages.reviews')
               ->with('slugs', $slugs);
}
public function ShowByCategory($cat_id) {
    $cat_ids = Review::with('categorys')->where('cat_id', $cat_id)->orderBy('id')->paginate(3);
  
    return View::make('pages.reviews')
               ->with('cat_ids', $cat_ids);
               
}
}