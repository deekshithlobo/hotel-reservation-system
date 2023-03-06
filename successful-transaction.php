<?php
session_start();
    $link= mysqli_connect("localhost","root","","project");
    $reserv_details= "select `hotel_id`,`room_id`,`date` from `transaction` where `transaction_id`='".$_SESSION['reserv_id']."' ;";
    $result=mysqli_query($link,$reserv_details);
    $row=mysqli_fetch_row($result);
    
    $hotel_name="SELECT `name` FROM `hotel` WHERE `hotel_id`='".$row[0]."' ;";
    $h_name_result=mysqli_query($link,$hotel_name);
    $hn=mysqli_fetch_row($h_name_result);
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Final Step</title>
      <style type="text/css">
      
          body{
              background-color: #FFDAB9;
              
          }
      
      </style>
      
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
                <li class="nav-item" >
                  <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="reservations.php"><?php echo $_SESSION["user"] ; ?></a>    
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">LogOut</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="container" style="margin:100px">
        <div class="p-3 mb-2 bg-success text-white"><h2>Registration was Successful!</h2></div>
        <span id="result" style="background-color: #7527b0;color: #fff;padding: 6px 70px;font-weight: 600;font-size: 18px; margin-left: 430px;margin-top:20px;border-radius: 5px;"><?php echo "please pay: ";echo $_SESSION['duddu']; ?></span>
            <table class="table table-striped table-dark" style="margin-top:50px">
              <thead>
                <tr>
                  <th scope="col">HotelID</th>
                  <th scope="col">HotelName</th>
                  <th scope="col">RoomID</th>
                  <th scope="col">CheckIn</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><?php echo $row[0]; ?></th>
                  <td><?php echo $hn[0]; ?></td>
                  <td><?php echo $row[1]; ?></td>
                  <td><?php echo $row[2]; ?></td>
                </tr>
              </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
