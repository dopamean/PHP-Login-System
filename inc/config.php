<?php

//if there is no config file called __CONFIG__ defined, do not load the file
if (!defined('__CONFIG__')) {
    exit('You don\'t have a config file');
}
//include the DB class file
include_once 'classes/DB.php';
//our config is below
define('ALLOW_FOOTER', true);

$con = DB::getConnection();