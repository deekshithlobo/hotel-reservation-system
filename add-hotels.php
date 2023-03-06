<?php
session_start();
$var=$_GET['dumbshit'];
$_SESSION['hname']=$var;
$link=mysqli_connect("localhost","root","","project");

$query="INSERT INTO `hotel` (`name`) VALUES ('".$_GET['dumbshit']."'; )";
mysqli_query($link,$query);
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
          input{
              width: 300px;
          }
          .form-group{
              
              width: 300px;
              margin-left: 400px;
          }
      
      </style>
  </head>
    <body>
        
        <div class="container" style="margin-top:50px">
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">
            <a class="navbar-brand" href="admin-main.php">BookMyHotel</a>
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
                  <a class="nav-link" href="add-hotels.php">Add</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        </div>
        <div class="container" style="margin:100px">
            <form action="add-hotel-verify.php" method="get">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Hotel ID</label>
                    <input type="text" class="form-control" name="hotel_id" placeholder="hotel id">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Location</label>
                    <input type="text" class="form-control" name="location" placeholder="Location">
                  </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Availability</label>
                    <input type="text" class="form-control" name="avail" placeholder="Availability">
                  </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">facilities</label>
                    <select class="form-control" id="loc" onchange="finalCost()" name="facilities" >
                     <option value="ac"> A/C </option>
                     <option value="non-ac"> NON-A/C </option>
                    <option value="ac/non-ac"> A/C-NON/AC</option>
                 </select>
                  </div>
                <span id="fuuu"></span>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contact</label>
                    <input type="text" class="form-control" name="contact" placeholder="xxxxxxxxxx">
                  </div>
                  <button type="submit" class="btn btn-primary" style="margin-left:500px;" id="btnn">Submit</button>
                </form>                 
        </div>
        <?php echo $_SESSION['hname']; ?>
        
        <script type="text/javascript">        
        </script>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>