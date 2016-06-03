<?php namespace App\Controllers;

use App\Controllers\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Product;
use App\Models\Customers;
use Cart;

class CustomerController extends Controller {

	public function getIndex(Request $request, Application $app){
		$order = Cart::get();
		return view('cart/checkout', ['order' => $order]);
	}	

	public function postCustomer(Request $request, Application $app){
		self::create($_POST['first_name'],
			$_POST['last_name'],
			$_POST['adress'],
			$_POST['postcode'],
			$_POST['phone']);
		return $app->redirect('/cart/checkout');

	}


	public function create($first_name, $last_name, $adress, $postcode, $phone){
		$customer = Customers::create(['first_name' => $first_name], ['last_name' => $last_name], ['adress' => $adress], ['postcode' => $postcode], ['phone' => $phone]);
		$customer->save();
	}
}