<?php

/* @var $employees array */

use yii\helpers\ArrayHelper;
use yii\helpers\Html;

$emails = ArrayHelper::getColumn($employees, 'email');

//echo implode(' ,', $emails);

echo '<br>';

$listData = ArrayHelper::map($employees, 'id', 'first_name');
echo Html::dropDownList('emails', [], $listData);
