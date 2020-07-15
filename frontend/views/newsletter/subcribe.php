<?php

/* if (Yii::$app->session->hasFlash('subscribeStatus')) {
 *     echo Yii::$app->session->getFlash('subscribeStatus');
 * } */

use frontend\assets\GalleryAsset;
GalleryAsset::register($this);

$this->title = 'Subscribe to news!';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Description of the page...'
]);

$this->params['breadcrumbs'] = [
    'Test 1',
    ['label' => 'Test 2', 'url' => ['/site/index']],
    'Test 3',
    'Test 4',
];

?>

<form method="post">
    <p>Email: </p>
    <input type="text" name="email" />
    <br><br>
    <input type="submit" />
</form>
