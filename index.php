<?php
/**
 * Created by PhpStorm.
 * User: dobrodeev
 * Date: 07.08.2018
 * Time: 17:33
 */
define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Router.php');
require_once (ROOT.'/components/DB.php');

$router = new Router();
$router->run();

