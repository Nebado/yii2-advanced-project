<?php

namespace frontend\models;

use Yii;

class Test
{
    public static function getNewsList($max)
    {
        $max = intval($max);
        $sql = 'SELECT * FROM news LIMIT ' . $max ;

        $result = Yii::$app->db->createCommand($sql)->queryAll();

        $helper = Yii::$app->stringHelper;

        if (!empty($result) && is_array($result)) {
            foreach ($result  as &$item) {
                $item['content'] = $helper->getShort($item['content']);
            } 
        }

        return $result;
    }

    public static function getItem($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM news WHERE id = $id";

        return Yii::$app->db->createCommand($sql)->queryOne();
    }
}
