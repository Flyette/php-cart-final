<?php namespace App\Controllers;

use App\Controllers\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Product;
use App\Models\Customers;
use App\Models\Orders;
use Cart;

class OrdersController extends Controller {

	public function getIndex(Request $request, Application $app){
		$order = Cart::get();
		return view('cart/validation', ['order' => $order]);
	}	

	public function postOrders(Request $request, Application $app){
		$order = Cart::get();
		$total = Cart::total();
		
		$orders = Orders::create([
			"customer_id" => $_POST['customer_id'],
			"amount" => $total]);
					
		return view('/cart/confirmation', ['orders' => $orders]);

	}
}