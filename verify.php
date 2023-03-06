<?php

session_start();
if($_POST){
    
    $user=$_POST['uname'];
    $password=$_POST['psw'];
    $link = mysqli_connect("localhost","root","","project");
    $sql = "SELECT `password`, `first_name`, `last_name` FROM `customer` WHERE `email` = '".$user."';";
    
    $result = mysqli_query($link,$sql);
    if($result){
        
        $row = mysqli_fetch_row($result);
        if($row!=null){
            $inp=$row[0];
            if(strcasecmp($password,$inp)==0){
                $_SESSION['user']=$row[1];
                $_SESSION['id']=$user;
                header('location: successful-login.php');
            }else{
              header('location: error-page.php');;
            }
            
            
        }else{
            
           header('location: error-page.php');;
        }
        
        
    }else{
            
           header('location: error-page.php');;
        }
    
   
}else{
            
           header('location: error-page.php');;
        }


?>