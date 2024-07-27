<?php
$a = $_GET['num1'];
$b = $_GET['num2'];

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

?>
<h3>First Number: </h3><input type = "number" name = "num1" value = "<?php echo $a; ?>" readonly>
<h3>Second Number: </h3><input type = "number" name = "num2" value = "<?php echo $b; ?>" readonly>