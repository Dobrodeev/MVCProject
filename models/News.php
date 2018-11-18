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
        $newlist = array();
        $result = $db->query('SELECT id, title, date, author_name, short_content FROM news');
        $i = 0;
        while ($row = $result->fetch())
        {
            $newlist[$i]['id'] = $row['id'];
            $newlist[$i]['title'] = $row['title'];
            $newlist[$i]['date'] = $row['dte'];
            $newlist[$i]['author_name'] = $row['author_name'];
            $newlist[$i]['short_content'] = $row['short_content'];
        }
        return $newlist;
//        echo '<pre>';
//        print_r($newlist);
//        echo '</pre>';
    }
}