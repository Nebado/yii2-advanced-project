<?php foreach ($list as $item): ?>

    <h1><a href="<?php echo Yii::$app->urlManager->createUrl(['test/view', 'id' => $item['id']]); ?>
                 "><?= $item['title']; ?></a></h1>
    <p><?= $item['description']; ?></p>
    
<?php endforeach ?>

