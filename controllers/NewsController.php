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
        echo 707;
        echo '<pre>';
        print_r($newslist);
        echo '</pre>';
    }

    public function actionNew()
    {

    }
}