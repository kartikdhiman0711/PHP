<?php
function isPrime($n){
    if($n == 0 || $n == 1){
        return 0;
    }
    else{
        for($i = 2; $i < $n; $i++){
            if($n % $i == 0){
                return 0;
            }
        }
        return 1;
    }
}
$a = $_GET['isPrime'];
if(isPrime($a)){
    echo "Number is prime";
}
else{
    echo "Number is not prime";
}
?>