<?php

namespace frontend\controllers;

use Yii;

use frontend\models\Book;
use frontend\models\Publisher;

class BookShopController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $conditions = ['publisher_id' => 1];
        // $bookList = Book::find()->where($conditions)->orderBy('date_published')->limit(2)->all();
        $bookList = Book::find()->orderBy('date_published')->limit(20)->all();

        return $this->render('index', [
            'bookList' => $bookList,
        ]);
    }

    public function actionCreate()
    {
        $book = new Book();
        $publishers = Publisher::getList();

        if ($book->load(Yii::$app->request->post()) && $book->save()) {
            Yii::$app->session->setFlash('success', 'Saved!');
            // return $this->redirect(['book-shop/index']);
            return $this->refresh();
        }
        
        return $this->render('create', [
            'book' => $book,
            'publishers' => $publishers,
        ]);
    }
}
