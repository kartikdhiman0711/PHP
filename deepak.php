<!DOCTYPE html>
<html>
<body>

<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  


echo "<table border>";
echo "<tr> <th>Name </th> <th>Date </th> <th>Price </th></tr>";
foreach($cars as $carDate){
    
        echo "<tr>";
        echo "<td>".$carDate['0']."</td>";
        echo "<td>".$carDate['1']."</td>";
        echo "<td>".$carDate['2']."</td>";
        echo "</tr>";
    
}
// echo "</table>";
// for ($row = 0; $row < 4; $row++) {
//   echo "<p><b>Row number $row</b></p>";
//   echo "<ul>";
//   for ($col = 0; $col < 3; $col++) {
//     echo "<li>".$cars[$row][$col]."</li>";
//   }
//   echo "</ul>";
// }
?>

</body>
</html>