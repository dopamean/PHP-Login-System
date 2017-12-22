<?php

//if there is no config file called __CONFIG__ defned, do not load the file
if (!defined('__CONFIG__')) {
    exit('You don\'t have a config file');
}
//our config is below
define('ALLOW_FOOTER', true);