<?php
require_once 'core/config.php';
require_once 'core/function.php';

move_uploaded_file($_FILES['image']['tmp_name'],'images/'.$_FILES['image']['name']);

$title=check($_POST['title']);
$descrMin=check($_POST['descr-min']);
$description=check($_POST['descriprion']);


$conn=connect();
insertSQL($conn,$title,$descrMin,$description,$_FILES['image']['name']);
echo 'Запись успешно произведена <a href="main.php">Перейти на главную страницу</a>';


closer($conn);

