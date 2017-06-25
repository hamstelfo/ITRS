<?php
include_once("/config/config.php");
include_once("/config/database.php");
include_once(APP_HOME_HELPERS."basics.php");
//pinta($_SERVER, true);
include_once(APP_HOME_LANG."lang.php");
include_once(APP_HOME_MODELS."basemodel.php");
include_once(APP_HOME_MODELS."menu.php");
//include_once(APP_HOME_MODELS."courses.php");
//include_once(APP_HOME_MODELS."contact.php");
include_once(APP_HOME_CORE."controller.php");

if (!$cntId= getRequest("controller"))
{
	$cntId= DEFAULT_CONTROLLER;
}

$cnt= new Controller($cntId);
$cnt->show();

?>