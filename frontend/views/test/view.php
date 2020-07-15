<?php
use yii\helpers\Url;
?>

<h1><a href=""><?= $item['title']; ?></a></h1>
<p><?= $item['description']; ?></p>

<a href="<?= Url::to(['test/index']); ?>" class="btn btn-info">Back</a>
