<?php

class Customer {

	public static function create($first_name, $last_name, $adress, $postcode, $phone){
		$customer = ORM::for_table('customers')->create();
		$customer->first_name = $first_name;
		$customer->last_name = $first_name;
		$customer->adress = $adress;
		$customer->postcode = $postcode;
		$customer->phone = $phone;
		$customer->save();
	}
}
