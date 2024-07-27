<?php

// $a = array("title" => "The Grapes of Wrath",
// "author" => "John Steinbeck",
// "pubYear" =>1939 );
// $element = each( $myBook );
// echo "Key: " . $element[0] . " < br/ > ";
// echo "Value: " . $element[1] . " < br/ > ";
// echo "Key: " . $element["key"] . " < br/ > ";
// echo "Value: " . $element["value"] . " < br/ > ";


// $myBook = array( "title" => "The Grapes of Wrath",
//  "author" => "John Steinbeck",
//  "pubYear" =>1939 );
// while ( $element = each( $myBook ) ) {
//  echo " < dt > $element[0] < /dt > ";
//  echo " < dd > $element[1] < /dd > ";
// }


// $authors = array( "Kartik", "Deepak", "Tarun Kumar GT", "Amit","Ajay" );
// foreach ( $authors as $val ) {
//  echo $val . "<br>";
// }


// $myBook = array("Title" =>"Main nhi Btaunga",
// "Author" =>"Deepak Rana",
//  "PubYear" =>2023 );
// foreach ( $myBook as $key => $value ) {
//  echo" <dt> $key </dt>";
//  echo" <dd> $value </dd>";
// }


// $authors = array( "Steinbeck", "Kafka", "Tolkien", "Dickens" );
// // Displays “Steinbeck Kafka Hardy Dickens”;
// foreach ( $authors as & $val ) {
//  if ( $val == "Tolkien" ) $val = "Hardy";
//  echo $val . " ";
// }
// unset( $val );
// echo "<br>";
// // Displays “Array ( [0] = > Steinbeck [1] = > Kafka [2] = > Hardy [3] = > Dickens )"
// print_r ( $authors );


$myBooks = array(
    array(
        "Title" => "Tittle 1",
        "Author" => "Author 1",
        "PubYear" => 2023
    ),
    array(
        "Title" => "Tittle 2",
        "Author" => "Author 2",
        "PubYear" => 2021
        ),
    array(
        "Title" => "Tittle 3",
        "Author" => "Author 3",
        "PubYear" => 2012
    ),
    array(
        "Title" => "Tittle 4",
        "Author" => "Author 4",
        "PubYear" => 2022
    ),
    array(
        "Title" => "Tittle 5",
        "Author" => "Author 5",
        "PubYear" => 2014
    ),
);
echo "<pre>";
print_r ( $myBooks );
echo "</pre>";
?>