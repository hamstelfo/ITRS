<?php // constants.php
require_once('server.config.php');

// ----------------------------------------------------- GENERAL -------------------------------------------------
define('APP_LAST_UPDATED', 		'24 Jun. 2017');
define('APP_CACHE_AVOID', 		'20170624r1');
define('APP_NAME', 						'ITRS');
define('APP_CONTACT_MAIL', 		'hamstelfo@gmail.com');
define('APP_AUTHOR', 					'Rubén Peinado Palomo');

define('DEFAULT_CONTROLLER', 	'home');

// ------------------------------------------------------ ERRORS --------------------------------------------------
if (DEV_MODE)
{
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
} 
else 
{
	error_reporting(0);
	ini_set('display_errors', 0);
}

// ------------------------------------------------------ PATHS --------------------------------------------------

if (DEV_MODE)
{
	if (! defined ( 'APP_URL' )) define ( 'APP_URL', 	'http://localhost/tests/ITRS' );
	if (! defined ( 'APP_HOME' )) define ( 'APP_HOME', 	'' );
} 
else 
{
	if (! defined ( 'APP_URL' )) define ( 'APP_URL', 	'http://'.$_SERVER['SERVER_NAME'].'/' );
	if (! defined ( 'APP_HOME' )) define ( 'APP_HOME', 	'' );
}

if (! defined ( 'APP_HOME_CORE' )) define ( 'APP_HOME_CORE', 	APP_HOME.'core/' );
if (! defined ( 'APP_HOME_MODELS' )) define ( 'APP_HOME_MODELS', 	APP_HOME.'models/' );
if (! defined ( 'APP_HOME_CONTROLLERS' )) define ( 'APP_HOME_CONTROLLERS', 	APP_HOME.'controllers/' );
if (! defined ( 'APP_HOME_ASSETS' )) define ( 'APP_HOME_ASSETS', 	APP_HOME.'assets/' );
if (! defined ( 'APP_HOME_VENDORS' )) define ( 'APP_HOME_VENDORS', 	APP_HOME_ASSETS.'vendors/' );
if (! defined ( 'APP_HOME_HELPERS' )) define ( 'APP_HOME_HELPERS', 	APP_HOME.'helpers/' );
if (! defined ( 'APP_HOME_LANG' )) define ( 'APP_HOME_LANG', 	APP_HOME.'lang/' );
if (! defined ( 'APP_HOME_VIEWS' )) define ( 'APP_HOME_VIEWS', 	APP_HOME.'views/' );

if (! defined ( 'APP_URL_ASSETS' )) define ( 'APP_URL_ASSETS', 	APP_URL.'/assets/');
if (! defined ( 'APP_URL_VENDORS' )) define ( 'APP_URL_VENDORS', 	APP_URL_ASSETS.'vendors/');

if (! defined ( 'APP_JS' )) define ( 'APP_JS', 		APP_URL_ASSETS.'js/' );
if (! defined ( 'APP_CSS' )) define ( 'APP_CSS', 	APP_URL_ASSETS.'css/' );
if (! defined ( 'APP_IMG' )) define ( 'APP_IMG', 	APP_URL_ASSETS.'images/' );
?>