<?php

Route::get('/', 'HomeController@ShowAll');


Route::get('test', 'TestController@ShowAll');


Route::get('links', 'LinkController@ShowAll');
// Route for blog
Route::get('blog', 'PostController@ShowByMonth');
Route::get('blog', 'PostController@ShowAll');
Route::get('blog/month/{month}', ['as' => 'post.month', 'uses' => 'PostController@ShowbyMonth']); 
Route::get('blog/id/{id}', ['as' => 'post.id', 'uses' => 'PostController@ShowbyId']); 
// Route for reviews
Route::get('reviews', 'ReviewController@ShowAll');
Route::get('reviews/{cat}/{slug}', ['as' => 'reviews.slug', 'uses' => 'ReviewController@ShowbySlug']); 
Route::get('reviews/category/{cat_id}', ['as' => 'reviews.category', 'uses' => 'ReviewController@ShowbyCategory']); 
// Route for gallery
Route::get('gallery', 'GalleryController@ShowAll');
Route::get('gallery/id/{id}', ['as' => 'gallery.id', 'uses' => 'GalleryController@ShowbyID']); 
// Route for Contact
Route::get('contact', function()
{
	return View::make('pages.contact');
});

Route::get('news', function()
{
	return View::make('pages.news');
});