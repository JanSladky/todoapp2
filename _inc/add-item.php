<?php

	// include
	require 'config.php';

<<<<<<< HEAD

//funkce ochrany

function sql_ochrana($text)
{
=======
	//funkce ochrany
	function sql_ochrana($text)
	{
>>>>>>> 13c29dd67f0c19f5fdea03577e77b11bf1f91345
	($text);
	$text = iconv("UTF-8", "UTF-8//IGNORE", $text);
	$text = htmlspecialchars($text);
	$text = chop($text);
	return $text;
}

$text = sql_ochrana($_POST["message"]);


<<<<<<< HEAD

// add new stuff
$id = $database->insert('items', [
	'text' =>   $text
]);

=======
	// add new stuff
	$id = $database->insert('items', [
		'text' =>   $text
	]);
>>>>>>> 13c29dd67f0c19f5fdea03577e77b11bf1f91345

	// success
	if ( $id ) {
		// header("Location:$base_url/index.php");
		die('success');
	}
