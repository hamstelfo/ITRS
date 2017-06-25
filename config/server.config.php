<?php
if (($_SERVER ['SERVER_NAME'] == "localhost") or (stristr ( $_SERVER ["SERVER_NAME"], "192.168." ))) {	
	// Localhost development mode.
	define('DEV_MODE', TRUE);
} 
else 
{
	// Production server.
	define('DEV_MODE', FALSE);
}
?>