<?php
/**
 * Created by PhpStorm.
 * User: dobrodeev
 * Date: 08.11.2018
 * Time: 17:57
 */
include_once (ROOT.'/models/News.php');
class NewsController
{
    public function actionIndex()
    {
        $newslist = array();
        $newslist = News::getNewsList();
//        echo 707;

        require_once (ROOT.'/views/news/index.php');
        return true;
    }

    public function actionView($id)
    {
        if ($id)
        {
            $newitem= array();
            $newitem=News::getNewListByID($id);
//            echo '<pre>';
//            print_r($newsitem);
//            echo '</pre>';
            require_once (ROOT.'/views/news/onenew.php');
        }
        return true;// без return цикл будет повторятся
    }
}