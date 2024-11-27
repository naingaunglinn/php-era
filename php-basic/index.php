<?php 
/* PHP.ini configuration */

// error_reporting, error_log, display_errors
var_dump(ini_get('error_reporting'));
var_dump(E_ALL);

ini_set('display_errors', 0);