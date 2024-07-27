<?php
    $z="Kartik Don from Cuhp";
    $a=$b=$c=$d=$e=0;
    $p = strlen($z);
    echo ("Length Of String '$z' is: ");
    echo strlen($z);
    echo "\n";
    for($i=0;$i<strlen($z);$i++)
    {
      if($z[$i]=="a") $a++;
      if($z[$i]=="e") $b++;
      if($z[$i]=="i") $c++;
      if($z[$i]=="o") $d++;
      if($z[$i]=="u") $e++;
      
    }
    echo "<br>";
    $y=$p-($a+$b+$c+$d+$e);
    echo ("$y are no. of consonants");
    echo "<br>";
    echo("a comes in this string $a times<br>");
    echo("e comes in this string $b times<br>");
    echo("i comes in this string $c times<br>");
    echo("o comes in this string $d times<br>");
    echo("u comes in this string $e times<br>");

    // replacing a string
    $y="Kartik from Haryana";
    echo "$y <br>";
    $x="Kartik from Haryana";
    echo str_replace("Haryana","Dharamshala","$x");

    echo "<br>";
    $h="Kartik from Himachal Pradesh";
    echo substr_replace($h,"Amit",13);
    echo "<br>";
    $j = "Here's a little string example.";
    echo strtr($j,"ie","ei");
    echo "<br>";
    echo strtolower($j);
    echo "<br>";
    echo strtoupper($j);
    echo "<br>";
    echo ucfirst($j);
    echo "<br>";
    echo lcfirst($j);
    echo "<br>";
    echo ucwords($j);
    echo "<br>";
    echo  ($j);
?>