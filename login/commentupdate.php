<?php

$host="localhost";
$user="root";
$password="";
$db="funolympic";
   $data=mysqli_connect($host,$user,$password,$db);

   $id=$_GET['id'];
   $query=mysqli_query($data,"select * from `login` where id='$id'");
   $row=mysqli_fetch_array($query);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   $username=$_POST["username"];
   $comment=$_POST["comment"];


    if ($data->connect_error) {
        die("Connection to server failed: " . $data->connect_error);
    }
    $query = "UPDATE login SET username = '$username',comment = '$comment' WHERE id='" . $_GET["id"] . "' ";
    if ($data->query($query) ==  TRUE) {
        echo "Specified Records updated...[OK]", "\n";
    }
    else {
        echo "Record Update Fail...[Error]", "\n";
    }
    $data->close();
    header("Location: usercomment.php");
}

?>
<!DOCTYPE html>
<html lang="en">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">
      <title>Update</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="img/webfavicon.png">
      <!-- Bootstrap core CSS-->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="css/fun.css" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css">
   </head>
   <body class="login-main-body">
      <section class="login-main-wrapper">
         <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
               <div class="col-md-5 p-5 bg-white full-height">
                  <div class="login-main-left">
                     <div class="text-center mb-5 login-main-left-header pt-4">
                        <img src="img/webfavicon.png" class="img-fluid" alt="LOGO">
                        <h5 class="mt-3 mb-3">Please Update Your Detail</h5>
                        <p>Please insert valid data</p>
                     </div>
                     <form method="post">
                        <div class="form-group">
                           <label>Username</label>
                           <input type="text" name="username" value="<?php echo $row['username']; ?>" class="form-control" placeholder="Enter Username" readonly>
                        </div>
                          <div class="form-group">
                           <label>Comment</label>
                           <input type="comment" name="comment" value="<?php echo $row['comment']; ?>" class="form-control" placeholder="comment">
                        </div>
                        <div class="mt-4">
                           <button type="submit" name="submit" value="update" class="btn btn-outline-primary btn-block btn-lg">update</button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="login-main-right bg-white p-5 mt-5 mb-5">
                     <div class="owl-carousel owl-carousel-login">
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="img/login.png" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">​Watch Games</h5>
                              <p class="mb-4">Watch games of all catagories</p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="img/login.png" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">Match Schedule</h5>
                              <p class="mb-4">All match schedule is provided</p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="img/login.png" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">Create Account</h5>
                              <p class="mb-4">Register to watch games </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Owl Carousel -->
      <script src="vendor/owl-carousel/owl.carousel.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/custom.js"></script>
   </body>
</html>