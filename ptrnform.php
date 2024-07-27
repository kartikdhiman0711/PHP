<?php
    $fn = $_GET['fname'];
    $ln = $_GET['lname'];
    $bd = $_GET['dob'];
    $em = $_GET['email'];
    $pd = $_GET['pwd'];
    echo $fn ."<br>" .$ln ."<br>".$bd ."<br>".$em."<br>". $pd."<br>";
    $fnln = '/^[A-Z][a-zA-Z]+\z/';
    $bdpt = '/^[0-3][0-9]-[0-1][0-9]-[0-9]{4}/';
    $empt = '/^[a-zA-Z0-9]+\@[a-zA-Z0-9]+\.[a-zA-Z]+/';
    // $pwpt = '/^(?=.*\d)(?=.*[A-Z]{1}[a-z])[0-9A-Za-z!@#$%]{8,12}/';
    echo preg_match($fnln,$fn).'<br>';
    echo preg_match($fnln,$ln).'<br>';
    echo preg_match($bdpt,$bd).'<br>';
    echo preg_match($empt,$em).'<br>';
    // echo preg_match($pwpt,$pd).'<br>';
?>	