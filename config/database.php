<?php
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection([
	'driver' => 'mysql',
	'database' => 'kart',
	'host' => 'localhost',
	'username' => 'root',
	'password' => 'toor',
	'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
	'prefix' => ''
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();