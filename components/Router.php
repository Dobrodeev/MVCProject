<?php
/**
 * Created by PhpStorm.
 * User: dobrodeev
 * Date: 07.08.2018
 * Time: 17:51
 */
class Router
{
    private $routes;// здесь уже массив

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';//здесь уже массив
        $this->routes = include($routesPath);
    }

    private function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI']))// если наш адрес не пуст после слеша
        {
            return trim($_SERVER['REQUEST_URI'],'/');// все что до слеша удаляем
        }
    }

    public function run()
    {

        $uri=$this->getURI();
//        echo $uri.'<br>';// адресная строка
//        echo '<pre>';
//        print_r($this->routes);
//        echo '</pre>';
        foreach ($this->routes  as $uriPattern=>$path)
        {
            if(preg_match("~$uriPattern~",$uri))
            {
                $internalRoute=preg_replace("~$uriPattern~",$path,$uri);// news/view/$1
                // подключаем роуты
                $segment=explode('/',$internalRoute);// news view $1
//                echo 'Выводим $segment: <br>';
//                echo '<pre>';
//                print_r($segment);
//                echo '</pre>';
                $controllername=array_shift($segment).'Controller';// newsController
//                echo '$controllername: '.$controllername.'<br>';
                $controllername=ucfirst($controllername);
                $actionname='action'.ucfirst(array_shift($segment));// первую букву делаем большой
                // подключать готовые action
//                echo '$actionname: '.$actionname.'<br>';
                $parametr = $segment;
//                echo 'Выводим $parametr: '.$parametr.'<br>';
//                echo '<pre>';
//                print_r($parametr);
//                echo '</pre>';
                $controllerfile = ROOT.'/controllers/'.$controllername.'.php'; // адрес на $NewsController
                if (file_exists($controllerfile)) // существует ли файл
                {
//                    echo 'Exist file: '.$controllername.'<br>';
                    include_once ($controllerfile);
                }
                $controllerobject = new $controllername;
                // вызываем обратную функции, в $parametr № новости
//                echo '<pre>';
//                print_r($controllerobject);
//                echo '</pre>';
                $result = call_user_func_array(array($controllerobject, $actionname), $parametr);
                if ($result != null)
                {
                    break;
                }
            }
        }
    }
}