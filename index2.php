<?php
require_once 'app/config/config.php';
require_once 'app/config/database.php';
require_once 'app/libraries/utils.php';


/*
 * Take a look at spl_autoload_register
 */
function myAutoload($class) {
    require_once 'app/'.CORE . $class .".php";
    
}
spl_autoload_register('myAutoload');

/*
* 
*/
Session::init();

/*
 * Bootstrap to App
 */
$bootstrap = new Bootstrap();

$bootstrap->init();
