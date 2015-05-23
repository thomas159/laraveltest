<?php namespace App\Providers;

use View;
use App\post;
use App\image;
use App\link;
use App\review;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

	/**
	 * This namespace is applied to the controller routes in your routes file.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'App\Http\Controllers';

	/**
	 * Define your route model bindings, pattern filters, etc.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function boot(Router $router)
	{
		parent::boot($router);

	
View::composer(array('pages.home'), function($view)
{
  $view->with('posts', Post::orderBy('id')->paginate(3));
});
View::composer(array('pages.home'), function($view)
{
  $view->with('links', Link::where('id', '=', '10')->get());
});
View::composer(array('partials.blogside'), function($view)
{
  $view->with('posts', Post::orderBy('id')->get());
});
View::composer(array('partials.blogphotopartial'), function($view)
{
  $view->with('ids', Image::where('cat','=','blog')->orderBy('id')->get());
});
View::composer(array('partials.reviewsside'), function($view)
{
  $view->with('reviews', Review::orderBy('id')->get());
});
View::composer(array('partials.photopartial'), function($view)
{
  $view->with('ids', Image::where('cat','=','rev')->orderBy('id')->get());
});
View::composer(array('partials.gallerypartial'), function($view)
{
  $view->with('gallerys', Gallery::orderBy('id')->get());
});
View::composer(array('partials.home-reviews'), function($view)
{
  $view->with('reviews', Review::orderBy('id')->get());
});
View::composer(array('partials.reviews-side'), function($view)
{
  $view->with('reviews', Review::orderBy('id')->get());
});
View::composer(array('partials.reviews-side-menu'), function($view)
{
  $view->with('reviews', Review::orderBy('id')->get());
});
View::composer(array('partials.gallerysidepartial'), function($view)
{
  $view->with('gallerys', Gallery::orderBy('id')->paginate(10));
});


		//
	}

	/**
	 * Define the routes for the application.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function map(Router $router)
	{
		$router->group(['namespace' => $this->namespace], function($router)
		{
			require app_path('Http/routes.php');
		});
	}

}
