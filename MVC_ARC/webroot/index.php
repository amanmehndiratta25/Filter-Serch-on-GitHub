<?php

// Define Some Constant Values
define("DS", DIRECTORY_SEPARATOR);
define("SITEPATH", dirname(dirname(__FILE__)));
define("VIEWS_PATH", SITEPATH.DS."views");


// Call and Run init Class Automatically in every Pages
require_once (SITEPATH.DS.'lib'.DS.'init.php');

// Check Session class for session is active or not
Session::setFlash("I am Amit Ghosh"); 


// Call run() funtion of App class
App::run($_SERVER['REQUEST_URI']);


// for SQL Active records Query
App::$db->select("*");
App::$db->from('pages');
App::$db->where('id=2');




// Check Database Table
$sql =  App::$db->getQuery();
$tset =  App::$db->query($sql);
 





?>
