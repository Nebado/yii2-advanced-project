<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<h1>Send Money</h1>

<div class="site-send">

    <div class="row">
        <div class="col-lg-5">
            <form action="" method="post">
                <p>Receiver:</p>
                <input type="text" name="receiver" />
                <br><br>
                <p>Amount:</p>
                <input type="number" name="amount" />
                <br><br>
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            </form>
        </div>
    </div>
</div>
