<?php
// //nested ifelse
// if($_GET["fname"]!=NULL){
//     if($_GET["dob"]!=NULL){
//         if($_GET["email"]!=NULL){
//             if($_GET["pwd"]!=NULL){
//                 if($_GET["cpwd"]!=NULL){
//                     if($_GET["pwd"]==$_GET["cpwd"]){
//                             //Success!
//                         if($_GET["gender"]!=NULL){
//                              echo "Form Submitted...! ";
//                         }
//                         else{
//                             echo "Gender field is empty...! ";
//                         }
//                     }
//                     else{
//                         echo "Password doesn't match...! ";
//                     }
//                 }
//                 else{
//                     echo "Confirm Password field is empty...! "; 
//                 }
//             }
//             else{
//                 echo "Password field is empty...! ";
//             }
//         }
//         else{
//             echo "Email Id field is empty...! ";
//         }
//     }
//     else{
//         echo "Date of birth field is empty...! ";
//     }
// }
// else{
//     echo "First Name field is empty...! ";
// }
// echo "<br>";
// //to print all fields with value
// print_r ($_GET);
// //to print only selected fields
// // echo "Email: ".$_GET["email"]."<br> Password: ".$_GET['pwd'];
if(strpbrk($_GET['usrname'],"@!")){
    echo "Username don't allow to contain '@' and '!'";
} 
else{
    if(isset($_GET['fname']) && !empty($_GET['fname'])){
        if(isset($_GET['dob']) && !empty($_GET['dob'])){
            if(isset($_GET['email']) && !empty($_GET['email'])){
                if(isset($_GET['pwd']) && !empty($_GET['pwd'])){
                    if(isset($_GET['cpwd']) && !empty($_GET['cpwd'])){
                        if($_GET["pwd"]==$_GET["cpwd"]){
                            if(isset($_GET['gender']) && !empty($_GET['gender'])){
                                echo "Form submitted...!";
                            }
                            else{
                                echo "Gender field is empty...! ";
                            }
                        }
                        else{
                            echo "Password doesn't match";
                        }
                    }
                    else{
                        echo "Confirm Password field is empty...! ";
                    }
                }
                else{
                    echo "Password field is empty...! ";
                }
            }
            else{
                echo "Email Id field is empty...! ";
            }
        }
        else{
            echo "Date of birth field is empty...! ";
        }
    }
    else{
        echo "First Name field is empty...! ";
    }
    // to print only selected fields
    echo "<br>";
    echo "Email: ".$_GET["email"]."<br> Password: ".$_GET['pwd']. "<br> Name: ".$_GET['fname']."<br>";
}
?>