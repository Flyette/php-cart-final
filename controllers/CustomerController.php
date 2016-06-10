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
		$customer = Customers::create([
			"first_name" => $request->get('first_name'),
			"last_name" => $request->get('last_name'),
			"address" => $request->get('address'),
			"postcode" => $request->get('postcode'),
			"phone" => $request->get('phone')]);
		$order = Cart::get();
		$price = Cart::total();
					
		return view('/cart/validation', ['customer' => $customer, 'order' => $order, 'total' => $price]);

	}
}