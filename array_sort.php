<?php
// single array sorting
// $myBooks =array("Amit","Deepak","Tarun","Ajay","Kartik");
// echo "<pre>";
// print_r ( $myBooks );
// echo "</pre>";
// //asort
// asort($myBooks);
// echo "<pre>";
// print_r ( $myBooks );
// echo "</pre>";
// arsort($myBooks);
// echo "<pre>";
// print_r ( $myBooks );
// echo "</pre>";
// //sort
// sort($myBooks);
// echo "<pre>";
// print_r ( $myBooks );
// echo "</pre>";
// rsort($myBooks);
// echo "<pre>";
// print_r ( $myBooks );
// echo "</pre>";
// //ksort
// ksort($myBooks);
// echo "<pre>";
// print_r ( $myBooks );
// echo "</pre>";
// krsort($myBooks);
// echo "<pre>";
// print_r ( $myBooks );
// echo "</pre>";
// multi sorting
// $myBooks = array(
//     array(
//         "Title" => "Tittle 5",
//         "Author" => "Author 1",
//         "PubYear" => 2023
//     ),
//     array(
//         "Title" => "Tittle 4",
//         "Author" => "Author 2",
//         "PubYear" => 2021
//         ),
//     array(
//         "Title" => "Tittle 1",
//         "Author" => "Author 3",
//         "PubYear" => 2012
//     ),
//     array(
//         "Title" => "Tittle 3",
//         "Author" => "Author 4",
//         "PubYear" => 2022
//     ),
//     array(
//         "Title" => "Tittle 2",
//         "Author" => "Author 5",
//         "PubYear" => 2014
//     ),
// );
// echo "<pre>";
// print_r ( $myBooks );
// echo "</pre>";
// array_multisort($myBooks);
// echo "<pre>";
// print_r ( $myBooks );
// echo "</pre>";

// addin removing array
$authors = array("Amit","Deepak","Tarun","Ajay","Kartik");
echo array_unshift( $authors, "Ajay", "Abhishek" ) . "<br/>"; 
echo "<pre>";
print_r ( $authors );
echo "</pre>";
echo array_shift( $authors ) . "<br>";
echo "<pre>";
print_r ( $authors );
echo "</pre>";
echo array_push( $authors, "Ajprit", "Sahil" ) . "<br>";
echo "<pre>";
print_r ( $authors );
echo "</pre>";
echo array_push( $authors, "Saurav", "Sahil" ) . "<br>";
echo "<pre>";
print_r ( $authors );
echo "</pre>";

?>