<?php
// $dev_data = array('id'=>'-1','firstname'=>'Developer','lastname'=>'','username'=>'dev_oretnom','password'=>'5da283a2d990e8d8512cf967df5bc0d0','last_login'=>'','date_updated'=>'','date_added'=>'');

// Get environment variables with fallback to local defaults
$base_url = getenv('BASE_URL') ?: 'http://localhost/lfis/';
$db_server = getenv('DB_SERVER') ?: "localhost";
$db_username = getenv('DB_USERNAME') ?: "root";
$db_password = getenv('DB_PASSWORD') ?: "";
$db_name = getenv('DB_NAME') ?: "lfis";
$db_port = getenv('DB_PORT') ?: 3306;  // Added port with default

// Define constants
if(!defined('base_url')) define('base_url', $base_url);
if(!defined('base_app')) define('base_app', str_replace('\\','/',__DIR__).'/' );
// if(!defined('dev_data')) define('dev_data',$dev_data);
if(!defined('DB_SERVER')) define('DB_SERVER', $db_server);
if(!defined('DB_USERNAME')) define('DB_USERNAME', $db_username);
if(!defined('DB_PASSWORD')) define('DB_PASSWORD', $db_password);
if(!defined('DB_NAME')) define('DB_NAME', $db_name);
if(!defined('DB_PORT')) define('DB_PORT', $db_port);  // New constant for port
?>