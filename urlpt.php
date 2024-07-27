<?php
    $url = $_GET['url'];
    $fgc = file_get_contents($url);
    // echo readfile($fgc);
    $urlpr = '/<a[^>]*\s+href="([^"]*)"[^>]*>/';
    preg_match_all($urlpr, $fgc, $pt);
    echo "<pre>";
    print_r($pt[1]);
    echo "</pre>";
?>