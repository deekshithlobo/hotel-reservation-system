<?php
$user ="lobo";

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Wlcome <?php echo "$user"; ?></title>
  </head>
  <body>
    
      
      <!-- Just an image -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">BookMyHotel</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="/book-my-hotel/successfull-login.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/book-my-hotel/history.php">History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/book-my-hotel/show-hotels.php">Show Hotels</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/book-my-hotel/modify-profile.php"><?php echo "$user"; ?></a>
              </li>
            </ul>
          </div>
        </nav>
      <form action="/book-my-hotel/updated.php">
                  <div class="container">
                    <h1>Edit Profile</h1>
                    <hr>
                    <div class="row">
                      <div class="col-md-9 personal-info">
                        <div class="alert alert-info alert-dismissable">
                          <a class="panel-close close" data-dismiss="alert">×</a> 
                          <i class="fa fa-coffee"></i>
                          This is an <strong>.alert</strong>. Use this to show important messages to the user.
                        </div>
                        <h3>Personal info</h3>

                          <form action="/book-my-hotel/updated.php" method="post">
                          
                              <label for="email"><b>Email</b></label>
                                <input type="text" placeholder="Enter Email" name="email" required><br>

                                  <label for="email"><b>First Name</b></label>
                                <input type="text" placeholder="First name" name="first-name" required><br>

                                  <label for="email"><b>LastName</b></label>
                                <input type="text" placeholder="Enter last name" name="last-name" required><br>


                                <label for="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="psw" required><br>

                                <label for="psw-repeat"><b>Repeat Password</b></label>
                                <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
                              <input type="submit" value="submit">                          
                          </form>
                        
                      </div>
                  </div>
                </div>
        </form>
    <hr>    
      
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>