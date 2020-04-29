<?php

// show all errors
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);


// require stuff
require_once 'vendor/autoload.php';

//global variable
$base_url = 'http://www.todoapp.wz.cz';

// Using Medoo namespace
use Medoo\Medoo;

// connect to db
$database = new Medoo([
	'database_type' => 'mysql',
	'database_name' => 'todoappwzcz1787',
	'server'        => 'sql4.webzdarma.cz',
	'username'      => 'todoappwzcz1787',
	'password'      => '^1%lgBQjo4DoAr1LrnR@',
	'charset'       => 'utf8'
]);