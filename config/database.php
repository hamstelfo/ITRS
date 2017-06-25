<?php
if (DEV_MODE)
{
	if (! defined ( 'BD_HOST' )) define ( 'BD_HOST', 	'localhost' );	
	if (! defined ( 'BD_NAME' )) define ( 'BD_NAME', 	'ITRS' );
	if (! defined ( 'BD_USER' )) define ( 'BD_USER', 	'root' );
	if (! defined ( 'BD_PASS' )) define ( 'BD_PASS', 	'' );
} 
else 
{
	if (! defined ( 'BD_HOST' )) define ( 'BD_HOST', 	'localhost' );	
	if (! defined ( 'BD_NAME' )) define ( 'BD_NAME', 	'ITRS' );
	if (! defined ( 'BD_USER' )) define ( 'BD_USER', 	'futbenne_fbwadm' );
	if (! defined ( 'BD_PASS' )) define ( 'BD_PASS', 	'' );
}
?>