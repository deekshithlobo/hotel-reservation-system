<?php
if($_POST){
        $fname = $_POST['first-name'];
        $lname = $_POST['last-name'];
        $email = $_POST['email'];
        $password = $_POST['psw'];
        $address=$_POST['address'];


    echo $fname;echo $lname;echo $email;echo $password;echo $address;
        $link = mysqli_connect("localhost","root","","project");
}
?>