<?php
/**
 * Created by PhpStorm.
 * User: dobrodeev
 * Date: 07.08.2018
 * Time: 17:51
 */

class Router
{
    private $routes; // здесь уже массив

    public function __construct()
    {
        $this->routes = ROOT.'config/routes.php';
    }

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI']))
        {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {

    }
}