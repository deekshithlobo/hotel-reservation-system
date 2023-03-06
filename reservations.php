<?php
    session_start();
    $link= mysqli_connect("localhost","root","","project");


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Reservations</title>
      <style type="text/css">
          body{
              
              background-color: rgb(66, 133, 244);
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
      
      <div class="container" style="margin:100px">
          <div class="p-3 mb-2 bg-secondary text-white"><h3>Reservations</h3> </div>
           <table class="table table-striped table-dark" style="margin-top:50px">
              <thead>
                <tr>
                  <th scope="col">Reservation ID</th>
                  <th scope="col">HotelName</th>
                  <th scope="col">RoomID</th>
                  <th scope="col">CheckIn</th>
                </tr>
              </thead>
              
                    <?php
                    $hs=array();
                    $query="select `reservation_id`,`hotel_id`,`check-in`,`hotel_name` from `reservation` where `customer_id`='".$_SESSION['id']."';";
                   $result=mysqli_query($link,$query);
                    if($result){
                        while(($row = mysqli_fetch_row($result)))
                        {
                            array_push($hs,$row);       
                        }
                        for($i=0;$i<sizeof($hs);$i++){
                           echo "<tbody>";
                            echo "<tr>";
                              echo "<th scope='row'>".$hs[$i][0]."</th>";
                              echo "<td>" .$hs[$i][1]. "</td>";
                              echo "<td>" .$hs[$i][2]. "</td>";
                              echo "<td>" .$hs[$i][3]. "</td>";
                            echo "</tr>";
                            echo "</tbody>";
                        }
                    }else{
                        echo "<div class='alert alert-success' role='alert'>";
                          echo "<h4 class='alert-heading'>Well done!</h4>";
                          echo "<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>";
                          echo "<hr>";
                          echo "<p class='mb-0'>Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                        </div>";
                        
                    }
                    
                ?>
                
            </table>
      
      </div>
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>