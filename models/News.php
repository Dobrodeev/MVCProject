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
        $result = $db->query('SELECT id, title, date, author_name, short_content, preview FROM news');
        $i = 0;
        while ($row = $result->fetch())
        {
            $newslist[$i]['id'] = $row['id'];
            $newslist[$i]['title'] = $row['title'];
            $newslist[$i]['date'] = $row['date'];
            $newslist[$i]['author_name'] = $row['author_name'];
            $newslist[$i]['short_content'] = $row['short_content'];
            $newslist[$i]['preview'] = $row['preview'];
            $i++;
        }
        return $newslist;
//        echo '<pre>';
//        print_r($newlist);
//        echo '</pre>';
    }
    public static function getNewListByID($id)
    {
        $db=DB::getConnect();
        $result = $db->query('SELECT * FROM news WHERE id='.$id);
        $result->setFetchMode((PDO::FETCH_ASSOC));
        $newsitem=$result->fetch();
        return $newsitem;
    }
}