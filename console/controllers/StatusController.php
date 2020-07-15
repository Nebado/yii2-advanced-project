<?php

namespace console\controllers;

class StatusController extends \yii\console\Controller
{
    public function actionTest()
    {
        echo 'Hello Test!\n'; 
        die;
    }
}
