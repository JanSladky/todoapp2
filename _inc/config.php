<?php

// show all errors
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);


// require stuff
require_once 'vendor/autoload.php';

//global variable
$base_url = 'http://www.todoapp.xf.cz';

// Using Medoo namespace
use Medoo\Medoo;

// connect to db
$database = new Medoo([
	'database_type' => 'mysql',
	'database_name' => 'todoappxfcz4385',
	'server'        => 'sql4.webzdarma.cz',
	'username'      => 'todoappxfcz4385',
	'password'      => '7cvR7e#)#z5@5$2-&xk@',
	'charset'       => 'utf8'
]);