<?php
    session_start();
    if($_POST){
        $uss=$_SESSION["id"];
        $u=$uss."-".$_SESSION["user"];
         $link= mysqli_connect("localhost","root","","project");
        $hname=$_POST['hotel'];
        $cin=$_POST["check-in"];
        $cout=$_POST['check-out'];
        $fac=$_POST['facility'];
        $capacity=$_POST['capacity'];
        $reserv_id=$_SESSION['reserv_id'];
        
        $query= "select hotel_id from hotel where name = '".$hname."';";

        $result = mysqli_query($link,$query);
        if($result){
        
            $row = mysqli_fetch_row($result);
            $hotel_id=$row[0];
        }
        $reserve_id=substr(md5(microtime()),rand(0,26),8); 
        $rooo="select `room_id`,`price` from `room` where `hotel_id`='".$hotel_id."' and `catagory`='".$fac."' and `capacity`='".$capacity."';";
        $hs=array();
        $lt = mysqli_query($link,$rooo);
        if($lt){  
              $rowq = mysqli_fetch_row($lt);
            $rom_id=$rowq[0]; 
        }$duddu=$rowq[1];   
        $_SESSION["duddu"]=$duddu;
        $fq="INSERT INTO `transaction` (`transaction_id`, `hotel_id`, `room_id`, `date`, `amount`, `customer_id`) VALUES ('".$_SESSION['reserv_id']."','".$hotel_id."','".$rom_id."','".$cin."','".$duddu."','".$uss=$_SESSION["id"]."') ;";
        
        $reserv_table_q="INSERT INTO `reservation`(`reservation_id`, `customer_id`, `room_id`,`hotel_id`,`check-in`,`hotel_name`) VALUES ('".$_SESSION['reserv_id']."','".$_SESSION["id"]."','".$rom_id."','".$hotel_id."','".$cin."','".$hname."') ;";
        
        
        if(mysqli_query($link,$reserv_table_q)){ 
            if(mysqli_query($link, $fq)){
                header("location: successful-transaction.php");
            }else{
                header("location:error-page.php");
            }
        }
        else{
            header("location:error-page.php");
        }
    }


?>