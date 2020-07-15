<?php

namespace common\components;

use Yii;
use yii\base\Component;
use common\components\UserNotificationInterface;

class EmailService extends Component
{
    /**
     * @param Usernotificationinterface $event
     * @return bool
     */
    public function notifyUser(UserNotificationInterface $event)
    {
        return Yii::$app->mailer->compose()
                  ->setFrom('ruslan.nbd@gmail.com')
                  ->setTo($user->getEmail())
                  ->setSubject($event->getSubject)
                  ->send();
    }

    /**
     * @param Usernotificationinterface $event
     * @return bool
     */
    public function notifyAdmins(UserNotificationInterface $event)
    {
        return Yii::$app->mailer->compose()
                  ->setFrom('ruslan.nbd@gmail.com')
                  ->setTo('ruslan.nbd@gmail.com')
                  ->setSubject($event->getSubject())
                  ->send();
    }
}
