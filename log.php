<?php
$host="localhost";
$uname="root";
$dpass="";
$db="test";
if(isset($_POST)){
    $email = $_POST['email'];
    $pass= sha1($_POST['pass']);
    $conn=mysqli_connect($host,$uname,$dpass,$db);
    if ($conn){
        $qry = "SELECT * FROM users WHERE email='$email'AND pass='$pass'";
        $qry_exec=mysqli_query($conn,$qry);
        if($qry_exec){
            if(mysqli_num_rows($qry_exec)>0){
                echo 'Login Successful';
            }
            echo'User not found';
        }
        else{
            echo "some error occured";
        }
    }
    else{
        echo'db connectionn failed';
    }
}
else{
    echo "Form not submitted";
}
?>