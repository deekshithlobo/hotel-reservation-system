<?php
    session_start();
    $link= mysqli_connect("localhost","root","","project");
    $loc=$_POST['location'];
    $t_len="SELECT COUNT(*) FROM `hotel` WHERE `location`= '".$loc."';";
    $res=mysqli_query($link,$t_len);
    if($res){
        $lenn=mysqli_fetch_row($res);
        
    }
    $hs=array();
    $query= "SELECT `name` FROM `hotel` WHERE `location`= '".$loc."';";
    $result=mysqli_query($link,$query);
    if($result){
        while(($row = mysqli_fetch_row($result)))
        {
            array_push($hs,$row);       
        }
    }
$date_min=date("Y-m-d");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <style type="text/css">
      
          body{
              margin-top: 100px;
              background-color:cornflowerblue;
          }
          html{
              background-color: cornflowerblue;
          }
          #output {
                background-color: #c5edf3;
                color: #463c39;
                font-size: 17px;
                padding: 30px 30px;
                width: 40%;
                border: 2px solid #009688;
                font-family: sans-serif;
                line-height: 1.8;
            }
            #newPublish {
                background-color: #c5edf3;
                color: #463c39;
                font-size: 17px;
                padding: 30px 30px;
                width: 40%;
                border: 2px solid #009688;
                font-family: sans-serif;
                line-height: 1.8;
            }
            .box {
                background-color: #f7f7f7;
                margin-top: 60px;
                margin-bottom: 50px;
                padding: 40px 60px;
            }
            #details_info {
                background-color: #f7f7f7;
                color: #463c39;
                font-size: 17px;
                padding: 30px 30px;
                width: 40%;
                border: 1px solid #cccccc;
                font-family: sans-serif;
                line-height: 1.8;
                margin-left: 90px;
            }
            .box3 {
                margin-top: 80px;
                margin-left: 150px;
                margin-right: 150px;
                margin-bottom: 60px;
                padding: 40px 50px;
                background-color: gainsboro;
            }
            .box11 {
                margin-top: 80px;
                margin-left: 250px;
                margin-right: 250px;
                margin-bottom: 60px;
                padding: 40px 50px;
                background-color: gainsboro;
                line-height: 2.5;
            }
            .web_design_box {
                margin-top: 30px;
                margin-left: 350px;
                margin-right: 350px;
                margin-bottom: 60px;
                padding: 40px 50px;
                background-color: #d9edf7;
                box-shadow: 3px 5px 10px #318f86;
            }
            .hotel_reserve_box {
                margin-top: 30px;
                margin-left: 350px;
                margin-right: 350px;
                margin-bottom: 60px;
                padding: 40px 50px;
                background-color: #c6badc;
                box-shadow: 3px 5px 10px #7527b0;
            }
            
            .result_box {
                margin-top: 15%;
                margin-left: 350px;
                margin-right: 350px;
                margin-bottom: 60px;
                padding: 20px 40px;
                background-color: #d4c0b9;
                box-shadow: 3px 5px 10px #8BC34A;
            }
            .result_box_text {
                color: #232222;
                font-size: 20px;
                text-align: center;
                padding-top:10px;
            }
            .result_box_text span {
                color: #614136;
                font-size: 26px;
                text-align: center;
            }
      
      </style>

    <title>Book Rooms</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">
            <a class="navbar-brand" href="successful-login.php">BookMyHotel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="successful-login.php">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link" href="pre-book.php">Book</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="reservations.php"><?php echo $_SESSION["user"] ; ?></a>    
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="container">
            <centre>
            <div class="hotel_reserve_box">
         <h3> Hotel Reservation Form </h3><br>
         <form action="book-verify.php" method="post">
             <label>Facility</label>
                 <select class="form-control" id="loc" onchange="finalCost()" name="facility" >
                     <option value="ac"> A/C </option>
                     <option value="non-ac"> Non-A/C </option>
                 </select>
                <label>Type</label>
                 <select class="form-control" id="loc" onchange="finalCost()" name="capacity" >
                     <option value="single"> Single </option>
                     <option value="family"> Family </option>
                 </select>
             
             <div class="form-group">
                 <label>Check-In</label>
                 <input type="date" name="check-in" class="form-control" min="<?php echo $date_min; ?>">    
             </div>
             <div class="form-group">
                 <label>check-out</label>
                 <input class="form-control" type="date" name="check-out" min="<?php echo $date_min; ?>">                  
             </div>
             <div class="form-group">
                 <label>Select hotel</label>
                 <select class="form-control" id="res_facilities" onchange="finalCost()" name="hotel">
                     <option >Select hotel</option>
                    <?php
                        for($i=0;$i<$lenn[0];$i++){
                            $var=$hs[$i][0];
                            echo $var;
                           echo "<option value='$var' > $var </option> ";
                        }
                     ?>
                     
                 </select>
             </div><br>
             <div class="form-group">
                 <label>Your transaction ID: </label>
                 <span id="result" style="background-color: #7527b0;color: #fff;padding: 6px 70px;font-weight: 600;font-size: 18px; margin-left: 10px;border-radius: 5px;"><?php $variable=substr(md5(microtime()),rand(0,26),5);echo $variable; ?></span>
                 <?php $_SESSION['reserv_id']=$variable; ?>
             </div>
             <div class="form-group">
                 <input type="submit" value="submit">
             </div>
         </form>
    </div>
                
                
         </centre>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>