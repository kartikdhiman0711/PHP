<?php
$host="localhost";
$uname="root";
$dpass="";
$db="cuhp";
if(isset($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = sha1($_POST['pass']);
    $conn=mysqli_connect($host,$uname,$dpass,$db);
    if ($conn){
        $qry = "INSERT INTO cuhp (id,name,email,pass)VALUES(null,'$name','$email','$pass')";
        $qry_exec=mysqli_query($conn,$qry);
        if($qry_exec){
            echo'registered successfully';
        }
        else{
            echo "some error occured";
        }
    }else{
        echo'db connectionn failed';
    }
}
else{
    echo 'Form not submitted';
}
?>