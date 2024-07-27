<?php
$host="localhost";
$uname="root";
$dpass="";
$db="test";
$conn=
    mysqli_connect($host,$uname,$dpass,$db);
if($conn)
{
    echo "status ok";
    $qry = "SELECT * FROM cuhp";
    $qry_exec=mysqli_query($conn,$qry);
    if(mysqli_num_rows($qry_exec)>0){
        $ftch = mysqli_rows()
    }
}
else{
    echo "DB error";
}
?>