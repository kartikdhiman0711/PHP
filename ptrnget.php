<?php
$a = $_GET['url'];
$b = $_GET['eid'];
echo $a ."<br>";
echo $b ."<br>";
$pt = '/^https:\/\/[a-zA-Z]*/';
$ept = '/^[a-zA-Z0-9]*\@[a-zA-Z0-9]*\.[a-zA-Z]*/';
echo preg_match($pt, $a) ."<br>";
echo preg_match($ept, $b)."<br>";
?>