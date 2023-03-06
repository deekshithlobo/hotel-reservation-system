<?php
session_start();
$link=mysqli_connect("localhost","root","","project");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Admin</title>
      <style type="text/css">
      
          body{
              background-color:floralwhite;
          }
      
      </style>
  </head>
    <body>
        
        <div class="container" style="margin-top:50px">
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">
            <a class="navbar-brand" href="successful-login.php">BookMyHotel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="admin-main.php">Home
                    <span class="sr-only">(current)</span>
                  </a>
                
                <li class="nav-item" >
                  <a class="nav-link" href="show-hotels.php">View</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="remove-hotels.php">Remove</a>    
                </li>
                  <li class="nav-item">
                  <a class="nav-link" href="login-info.php">LoginInfo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">logOut</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        </div>
        <div class="container" style="margin:100px">
            <?php
                if(isset($_POST['submit']))
                {
                    $nameppp = $_POST['hotel_id'];
                    echo  $nameppp;
                }
                ?>
            <center>
                <form method="post" action="sucessful-delete.php">
                  <div class="form-group">
                    <label for="exampleInputPassword1">HotelID</label>
                    <input style="width:300px" type="text" class="form-control" name="hotel_id" placeholder="hotel Id">
                  </div>
                  <input type="submit">
                </form>
            </center>      
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>