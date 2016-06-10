<?php namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Orders extends Eloquent {
	    protected $fillable = ['customer_id', 'created_at', 'amount', 'shipped'];
	public $timestamps = false;
}