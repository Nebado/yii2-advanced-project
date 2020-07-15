<?php

namespace console\controllers;
use Yii;

class MailerController extends \yii\console\Controller
{
    public function actionSend()
    {
        $result = Yii::$app->mailer->compose()
                     ->setFrom('ruslan.nbd@gmail.com')
                     ->setTo('ruslan.nbd@gmail.com')
                     ->setSubject('Subject')
                     ->setTextBody('Message')
                     ->setHtmlBody('<b>text message in format HTML</b>')
                     ->send();
        var_dump($result);
        die;
    }
}
