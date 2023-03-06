<?php
session_start();
$user=$_POST['uname'];
$password=$_POST['psw'];

$link=mysqli_connect("localhost","root","","project");
$query="SELECT `name`,`password` FROM `admin` WHERE `username`= '".$user."';";

$result=mysqli_query($link,$query);

if($result){
    if($row=mysqli_fetch_row($result)){
        
        if(strcasecmp($password,$row[1]==0)){ 
            $_SESSION['user']=$row[0];
            $_SESSION['id']=$user;
            header("location: admin-main.php");
            
        }else{
            header("location: error-page.php");
        }
        
        
    }else{
        header("location: error-page.php");
    }
}else{
    header("location: error-page.php");
}


?>