<?php
$k=$_GET["str"];
if(isset($_GET["str"]) && !empty($_GET["str"])){
    $z=$_GET["str"];
    $a=$b=$c=$d=$e=0;
    // $p = strlen($z) - substr_count($z, ' ');
    $z = preg_replace("/[^A-Za-z]/","",$z);
    $p = strlen($z);
    echo ("Length Of String '$k' without spaces is: ");
    echo strlen($k);
    echo "<br>";
    echo "And by removing all the special characters and spaces is: ".strlen($z);
    echo "\n";
    for($i=0;$i<strlen($z);$i++)
    {
        if($z[$i]=="a"||$z[$i]=="A") $a++;
        if($z[$i]=="e"||$z[$i]=="E") $b++;
        if($z[$i]=="i"||$z[$i]=="I") $c++;
        if($z[$i]=="o"||$z[$i]=="O") $d++;
        if($z[$i]=="u"||$z[$i]=="U") $e++;
    }
    echo "<br>";
    $l = $a+$b+$c+$d+$e;
    $y=$p-$l;
    echo ("$y are no. of consonants.");
    echo "<br>";
    echo "$l are no. of vowels.";
    echo "<br>";
    echo("a comes in this string $a times<br>");
    echo("e comes in this string $b times<br>");
    echo("i comes in this string $c times<br>");
    echo("o comes in this string $d times<br>");
    echo("u comes in this string $e times<br>");
}
else{
    echo "Field is empty.";
}
?>