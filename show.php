<?php
require_once 'core/config.php';
require_once 'core/function.php';

if(!isset($_GET['id'])){
    exit('erorr 404');
}

$id=$_GET['id'];

settype($id,'int');

$conn=connect();
$data=selectWithParam($conn,$id);
closer(connect());


$out='';
$out .="<h1>{$data['title']}</h1>";
$out .="<img src='images/{$data['image']}' width='500px'>";
$out.="<p>{$data['description']}</p>";
$out.="<hr>";


echo $out;

echo '<a href="main.php">Вернуться на главную</a>';