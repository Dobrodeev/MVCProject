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

    public function actionNew($id)
    {
        if ($id)
        {
            $newsitem= array();
            $newsitem=News::getNewListByID($id);
            echo '<pre>';
            print_r($newsitem);
            echo '</pre>';
        }
    }
}