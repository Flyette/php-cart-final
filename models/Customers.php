<?php namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Customers extends Eloquent {
	    protected $fillable = ['first_name', 'last_name', 'address', 'postcode', 'phone'];
	public $timestamps = false;
}