<?php  
    function count_var($y){    
        $count = 0;
        foreach($y as $e){
            $count++;
        }
        // check no of element
        if($count & 1){
            return $count;
        }
        //if there is no element then it return 0
        return 0;
    }
    $elm = array(12, 12, 32);
    $elmnt = count_var($elm);
    if($elmnt > 0)  
    echo " Number of elements present in the array: ".$elmnt;
    else
    echo " Array is empty";
?>