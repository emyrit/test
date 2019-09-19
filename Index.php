<?php
require_once 'core/config.php';
require_once 'core/function.php';

?>

<form action="add.php" method="post" enctype="multipart/form-data">
    <p>Title: <input type="text" name="title"></p>


    <p>Min description: </p>
    <textarea name="descr-min" style="width: 200px; height: 200px"></textarea>
    <p>Description: </p>
    <textarea name="descriprion" style="width: 200px; height: 200px"></textarea>
    <p>Photo: <input name="image" type="file"></p>
    <p><input type="submit" value="add"></p>
</form>

