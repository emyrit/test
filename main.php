<?php
require_once 'core/config.php';
require_once 'core/function.php';

connect();
$data=select(connect());
closer(connect());


$out='';
$out.="<a href='Index.php'>Add new</a>";
$out.="<hr>";
for($i=0;$i<count($data); $i++){
    $out .="<img src='images/{$data[$i]['image']}' width='90px'>";
    $out .="<h2>{$data[$i]['title']}</h2>";
    $out.="<h2>{$data[$i]['descr_min']}</h2>";
    $out.="<a href='show.php?id={$data[$i]['id']}'>Read More</a>";
    $out.="<hr>";
}

echo $out;

