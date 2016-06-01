<?php

class Cart {
	public static function get() {
		if(isset($_SESSION['cart'])){
			return json_decode($_SESSION['cart']);
		}
		return [];
	}

	public static function add($product) {
		$order = self::get();
		array_push($order, $product);
		$_SESSION['cart'] = json_encode($order);

	
	}
 
	public static function count(){
		return count(self::get());
	}

	public static function total(){
		$order = self::get();
		foreach ($order as $o) {
		 $price += $o->price;
		}
		return $price; 
	}

	public static function create($id, $name, $price, $picture){
		$order = ORM::for_table('orders')->create();
		$order = self::get();
		foreach ($order as $o) {
		$order->id = $o->id;
		$order->name = $o->name;
		$order->price = $o->price;
		$order->picture = $o->picture;
			
		}
		$order->save();
	}
}
