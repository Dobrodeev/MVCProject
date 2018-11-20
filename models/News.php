<?php
/**
 * Created by PhpStorm.
 * User: dobrodeev
 * Date: 15.11.2018
 * Time: 16:36
 */
class News
{
    public static function getNewsList()
    {
        $db = DB::getConnect();// подключение к БД
        $newslist = array();
        $result = $db->query('SELECT id, title, date, author_name, short_content FROM news');
        $i = 0;
        while ($row = $result->fetch())
        {
            $newslist[$i]['id'] = $row['id'];
            $newslist[$i]['title'] = $row['title'];
            $newslist[$i]['date'] = $row['dte'];
            $newslist[$i]['author_name'] = $row['author_name'];
            $newslist[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        return $newslist;
//        echo '<pre>';
//        print_r($newlist);
//        echo '</pre>';
    }
}