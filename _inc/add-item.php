<?php

	// include
	require 'config.php';

	//funkce ochrany
function sql_ochrana($text)
{
	($text);
	$text = iconv("UTF-8", "UTF-8//IGNORE", $text);
	$text = htmlspecialchars($text);
	$text = chop($text);
	return $text;
}

$text = sql_ochrana($_POST["message"]);


	// add new stuff
	$id = $database->insert('items', [
		'text' =>   $text
	]);

	// success
	if ( $id ) {
		// header("Location:$base_url/index.php");
		die('success');
	}
