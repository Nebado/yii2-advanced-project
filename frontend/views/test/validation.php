<?php

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}
?>

<h1>Test Validation</h1>

<form method="post">
    <p><input name="options[]" type="checkbox" value="1" />Wifi:</p>
    <br>

    <p><input name="options[]" type="checkbox" value="2" />Big window:</p>
    <br>

    <p><input name="options[]" type="checkbox" value="3" />Ice cream:</p>
    <br>

    <input type="submit" />
</form>
