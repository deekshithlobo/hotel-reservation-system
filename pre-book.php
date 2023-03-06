<?php
    session_start();
    $link= mysqli_connect("localhost","root","","project");
    $query= "SELECT `name` FROM `hotel`;"; 
    $result=mysqli_query($link,$query);
    if($result){
        
        $row=mysqli_fetch_row($result);
    }
       
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <style type="text/css">
      
          body{
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
            .online_food_delivery_box {
                margin-top: 50px;
                margin-left: 350px;
                margin-right: 350px;
                margin-bottom: 60px;
                padding: 20px 40px;
                background-color: #d4c0b9;
                box-shadow: 3px 5px 10px #714c4a;
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
                  <a class="nav-link" href="book.php">Book</a>
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
                <div style="margin-top:200px;margin-left:450px">
                 <form action="book.php" method="post">
                    <div class="form-group">
                 <label>Location</label>
                 <select class="form-control" id="loc" onchange="finalCost()" name="location" style="width:200px;">
                     <option value="bangalore"> Bangalore </option>
                     <option value="mysore"> Mysore </option>
                     <option value="mangalore"> Mangalore </option>
                 </select> 
                <button type="submit" style="margin:15px;">Proceed</button>
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