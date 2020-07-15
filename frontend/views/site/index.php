<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
use frontend\widgets\newsList\NewsList;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <?php echo "Hello " . (Yii::$app->user->identity->username ?? "Guest"); ?>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="<?php echo Url::to(['newsletter/subscribe']); ?>">Subscribe to newsletter</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>
                <?php echo NewsList::widget(['showLimit' => 1]); ?>
                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <a href="<?= Url::to(['test/send']);?>" class="btn btn-default">Money Send</a>
                
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <a href="<?= Url::to(['search/index']);?>">Search v.2</a>p
                <br>
                <a href="<?= Url::to(['search/advanced']);?>">Search v.3</a>

            </div>
        </div>

    </div>
</div>
