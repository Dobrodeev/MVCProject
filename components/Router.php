<?php
/**
 * Created by PhpStorm.
 * User: dobrodeev
 * Date: 07.08.2018
 * Time: 17:51
 */
/**
class Router
{
    private $routes; // здесь уже массив

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php'; // здесь уже массив
        $this->routes = include ($routesPath);
    }
    // проверить человекоподобный URL
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) // если наш адрес не пуст после слеша
        {
            return trim($_SERVER['REQUEST_URI'], '/'); // все что до слеша удаляем
        }
    }

    public function run()
    {
        $uri = $this->getURI();
        echo $uri;
        foreach ($this->routes as $uriPattern=>$path)
        {
            if (preg_match("~$uriPattern~", $uri))
            {
                $internalRoute = preg_replace("$uriPattern", $path, $uri);
                // подключаем роуты
                $segment = explode('/', $internalRoute);
                $controllername = array_unshift($segment).'Conroller';
                $controllername = ucfirst($controllername); // первую букву делаем большой
                $actioname = 'action'.ucfirst(array_shift($segment));
                // подключать готовые action
            }
        }
    }
}
**/
class Router
{

    private $routes;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getURI(){
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'],'/');

        }
    }


    public function run(){

        $uri=$this->getURI();
        echo $uri;// адресная строка

        foreach ($this->routes  as $uriPattern=>$path){
            if(preg_match("~$uriPattern~",$uri)){
                $internalRoute=preg_replace("~$uriPattern~",$path,$uri);
                $segment=explode('/',$internalRoute);
//                echo '<pre>';
//                print_r($segment);
//                echo '</pre>';
                $controllername=array_shift($segment).'Controller';
//                echo $controllername.'<br>';
                $controllername=ucfirst($controllername);
                $actionname='action'.ucfirst(array_shift($segment));
//                echo $actionname;
                $parametr = $segment;
                $controllerfile = ROOT.'/controllers/'.$controllername.'.php'; // адрес на $NewsController
                if (file_exists($controllerfile)) // существует ли файл
                {
                    include_once ($controllerfile);
                }
                $controllerobject = new $controllername;
                $result = call_user_func_array(array($controllerobject, $actionname), $parametr);
                if ($result != null)
                {
                    break;
                }
            }


        }
    }
}