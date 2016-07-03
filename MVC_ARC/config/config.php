<?php

Config::set('site_name', 'HelpWebTech.com'); // set website Title :  call  Config class use  Set function and pass two variables  name : $key and $value
Config::set('languages', array('en','fr'));   // set language and pass two variables name en and fr



Config::set('routes', array(
    
    'default' => '',
    'admin' => 'admin' 
));

Config::set('default_route', 'default'); // set default root path

Config::set('default_language', 'en'); // set default language 

Config::set('default_controller', 'pages'); // set default controller name

Config::set('default_action', 'index');  // set default action page

Config::set('db.hostname', '127.0.0.1');  // set db.hostname in the Config::set($key, $value)
Config::set('db.username', 'root');      // set db.username in the Config::set($key, $value)
Config::set('db.password', '');         // set db.password in the Config::set($key, $value)
Config::set('db.dbname', 'mvc_arc');    // set db.dbname in the Config::set($key, $value)

?>