<?php

// how variable is printed with string
$s = 'Dhiman';
$s1 = 'My name is Kartik $s<br>';
$s2 = "My name is Kartik $s.<br>";
echo $s1;
echo $s2;

// multiline string
$s3 = <<<STRING
How are you 
Mr. $s,
Where are you going?<br>
STRING;
echo $s3;

// string lenght function
echo "Lenght of string s is: " .strlen($s)."<br>";

// string word count function
echo "Number of words in string s are: ".str_word_count($s)."<br>";

// changing alphabet at any index
$s[2] = 'e'; 
echo "Word at index 3 of string s is: ".$s."<br>";

// Substring: to find element inside a string
echo strstr($s2, "is", true)."<br>";
echo strstr($s2, "is");//by default its false

// gives the position from the beginning
echo strpos($s2, "K")."<br>";

// gives position from the last
echo strrpos($s2, "K")."<br>";

// occurence of character
$s4 = "This string is used to count the number of occurence characters.";
$a = 'a';
function cnt($s4, $a){
    $i = 0;
    $count = 0;
    $n = strlen($s4);
    while($i<$n){
        $d = strpos($s4, $a, $i);
        if($d===false){
            break;
        }
        $i = $d + 1;
        $count++;
    }
    return $count;
}
echo $s4."<br>";
echo "Number of 'a' in the given string is/are: ".cnt($s4,$a)."<br>";

// occurence of vowels
$s5="This is to count the number of vowels in a string";

$vowels=['a','e', 'i', 'o', 'u'];

echo $s5."<br>";
for($j=0;$j<5;$j++){
    echo $vowels[$j]. " occurs ". cnt($s5,$vowels[$j])." times <br>";
}
?>  


