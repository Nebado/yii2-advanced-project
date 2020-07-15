<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;

class DaoController extends Controller
{
    public function actionIndex()
    {
        // #1
        $sql1 = 'SELECT * FROM news;';
        $result1 = Yii::$app->db->createCommand($sql1)->queryAll();

        echo '<pre>';
        print_r($result1);
        echo '</pre>';die;
        
        return $this->render('index');
    }
}
