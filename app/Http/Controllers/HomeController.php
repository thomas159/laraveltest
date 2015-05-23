<?php namespace App\Http\Controllers;

use App\post;

class HomeController extends Controller {

	public function ShowAll()
	{
		return view('pages.home');
	}

}
