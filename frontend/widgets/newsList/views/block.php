<?php foreach ($list as $item): ?>
    <h3>
        <a href="<?= Yii::$app->urlManager->createUrl(['test/view', 'id' => $item['id']]);?>"
           <?= $item['title']; ?>
        </a>
        <p><?= $item['content']; ?></p>
    </h3>
<?php endforeach; ?>
