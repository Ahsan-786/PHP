<?php 
	// People Array @TODO - Get from DB
	$people[]="Steve";
	$people[]="John";
	$people[]="Kathy";
	$people[]="Evan";
	$people[]="Anthony";
	$people[]="Tom";
	$people[]="Rhonda";
	$people[]="Hal";
	$people[]="Erine";
	$people[]="Johana";
	$people[]="Farrah";
	$people[]="Linda";
	$people[]="Shawn";
	$people[]="Olivia";
	$people[]="Derek";
	$people[]="Amanda";
	$people[]="Rachel";
	$people[]="Katie";
	$people[]="Jillian";
	$people[]="Jose";
	$people[]="Malcon";
	$people[]="Greg";
	$people[]="Mary";
	$people[]="Brad";
	$people[]="Mike";
	$people[]="Lex";
	$people[]="John";
	$people[]="Mikkey";

	//  Get Query String
	$q = $_REQUEST['q'];

	$suggestion = "";

	//  Get Suggestions
	if ($q !== "") {
		$q = strtolower($q);
		$len = strlen($q);
		foreach ($people as $person) {
			if (stristr($q, substr($person, 0 ,$len))) {
				if ($suggestion === "") {
					$suggestion = $person;
				}else{
					$suggestion .= ", $person";
				}
			}
		}
	}

	echo $suggestion === "" ? "No Suggestion" : $suggestion;
	
 ?>