<?php namespace App\Controllers;

use App\Controllers\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Product;

class HomeController extends Controller {

	public function getIndex(Request $request, Application $app){
		return view('home', ['products' => Product::all()]);
	}	

	public function getLogout(Application $app){
		session_destroy();
		return $app->redirect('/');
	}

}