<?php

##############################################################################################
## ~~ GLOBAL VARS ~~~~
$formHash = new array();
$dataString = "";
##~~End GLOBAL VARS ~~~~~
##############################################################################################
##############################################################################################
##~~ Read data into the formHash
if($_SERVER["REQUEST_METHOD"] === "POST")
{
	foreach ($_POST as $key => $value) 
	{
		$formHash[$key] = $value;
	}
}
elseif ($_SERVER["REQUEST_METHOD"] === "GET")
{
	foreach ($_GET as $key => $value)
	{
		$formHash[$key] = $value;
	}
}
else break;
##############################################################################################
