<?php
$myBooks = array(
    array("Title" => "Tittle 1","Author" => "Author 1","PubYear" => 2023),
    array("Title" => "Tittle 2","Author" => "Author 2", "PubYear" => 2021),
    array("Title" => "Tittle 3","Author" => "Author 3","PubYear" => 2012),
    array("Title" => "Tittle 4","Author" => "Author 4","PubYear" => 2022),
    array("Title" => "Tittle 5","Author" => "Author 5","PubYear" => 2014),
);

echo '<table border>';
echo "<tr><th> Title </th> <th> Author </th> <th> PubYear </th></tr>";
foreach ($myBooks as $table) 
    { 
        echo '<tr>';
        echo '<td> ' . $table['Title'] . ' </td>';
        echo '<td> ' . $table['Author'] . ' </td>';
        echo '<td> ' . $table['PubYear'] . ' </td>';
        echo '</tr>';
    }
?>