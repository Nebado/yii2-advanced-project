<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class HtmlHelperController extends Controller
{
    public function actionDemo()
    {
        return $this->render('demo');
    }

    public function actionEscapeOutput()
    {
        $comments = [
            [
                'id' => 10,
                'author' => 'Student',
                'text' => 'Hello!',
            ],
            [
                'id' => 11,
                'author' => 'Vas',
                'text' => '<script>alert("Cracked!");</script>',
            ],
        ];
        
        return $this->render('escape-output', [
            'comments' => $comments,
        ]);
    }
}
