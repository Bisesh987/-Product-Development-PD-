<?php
$host="localhost";
$user="root";
$password="";
$db="funolympic";
session_start();
	
$data=mysqli_connect($host,$user,$password,$db);


if(!isset($_SESSION["username"]))
{
	header("location:login.php");
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
      <title>Admin panel</title>
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
   <body id="page-top">
      <nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
         &nbsp;&nbsp; 
         <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
         <i class="fas fa-bars"></i>
         </button> &nbsp;&nbsp;
         <a class="navbar-brand mr-1" href="admin.php"><img class="img-fluid" alt="" src="img/gamelogo.png"></a>
         <marquee><h1>Welcome Admin, <?php echo $_SESSION["username"] ?></h1></marquee>    
         <!-- Navbar Search -->
         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 navbar-search">
            <div class="input-group">
               <input type="text" class="form-control" placeholder="Search for...">
               <div class="input-group-append">
                  <button class="btn btn-light" type="button">
                  <i class="fas fa-search"></i> 
                  </button>
               </div>
            </div>
         </form>
         <!-- Navbar -->
         <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
            
            <li class="nav-item dropdown no-arrow mx-1">
               <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-bell fa-fw"></i>
               <span class="badge badge-danger">9+</span>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
                  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>
               </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
               <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-envelope fa-fw"></i>
               <span class="badge badge-success">7</span>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
                  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>
               </div>
            </li>
            <li class="nav-item dropdown no-arrow osahan-right-navbar-user">
               <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <img alt="Avatar" src="img/avatar.png"><?php echo $_SESSION["username"] ?>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="adminsetting.php"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
               </div>
            </li>
         </ul>
      </nav>
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="sidebar navbar-nav">
            <li class="nav-item active">
               <a class="nav-link" href="admin.php">
               <i class="fas fa-fw fa-home"></i>
               <span>Home</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="allusers.php">
               <i class="fas fa-fw fa-users"></i>
               <span>Total Admins and Users</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="totaladmin.php">
               <i class="fas fa-fw fa-user-alt"></i>
               <span>Total Admin</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="totaluser.php">
               <i class="fas fa-fw fa-user-alt"></i>
               <span>Total Users</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="usercomment.php">
               <i class="fas fa-fw fa-user-alt"></i>
               <span>Users Comment</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="uploadvideo.php">
               <i class="fas fa-fw fa-cloud-upload-alt"></i>
               <span>Upload Video</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="gamelist.php">
               <i class="fas fa-fw fa-cloud-upload-alt"></i>
               <span>Add Games</span>
               </a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-fw fa-folder"></i>
               <span>Pages</span>
               </a>
               <div class="dropdown-menu">
                  <h6 class="dropdown-header">Login Screens:</h6>
                  <a class="dropdown-item" href="login.php">Login</a>
                  <a class="dropdown-item" href="Signup.php">Register</a>
                  <a class="dropdown-item" href="forgot.php">Forgot Password</a>
                  <div class="dropdown-divider"></div>
                  <h6 class="dropdown-header">Other Pages:</h6>
                  <a class="dropdown-item" href="404.php">404 Page</a>
                  <a class="dropdown-item" href="blank.php">Blank Page</a>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">
               <i class="fas fa-fw fa-history"></i>
               <span>Live Games</span>
               </a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="categories.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-fw fa-list-alt"></i>
               <span>Categories</span>
               </a>
               <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">FootBall</a>
                  <a class="dropdown-item" href="#">Swimming</a>
                  <a class="dropdown-item" href="#">Shooting</a>
               </div>
            </li>
          </ul>
         <div id="content-wrapper">
            <div class="container-fluid pb-0">
               <div class="top-mobile-search">
                  <div class="row">
                     <div class="col-md-12">   
                        <form class="mobile-search">
                           <div class="input-group">
                             <input type="text" placeholder="Search for..." class="form-control">
                               <div class="input-group-append">
                                 <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                               </div>
                           </div>
                        </form>   
                     </div>
                  </div>
               </div>
               <div class="video-block section-padding">
                  <div class="row">
                     <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                           <div class="video-card-image">
                              <a href="allusers.php"><img class="img-fluid" src="img/all.png" alt=""></a>
                              <div class="num">
                              	<?php
                           		$sql="SELECT count(id) AS total FROM login";
         								$result=mysqli_query($data,$sql);
         								$row=mysqli_fetch_assoc($result);
         								$num_row=$row['total'];
         								echo $num_row;
                              ?>
                              </div>
                           </div>
                           <div class="video-card-body">
                              <div class="video-title">
                                 <a href="allusers.php">Total Admin and Users</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                           <div class="video-card-image">
                              <a href="totaladmin.php"><img class="img-fluid" src="img/alladmin.png" alt=""></a>
                              <div class="num">
                              <?php
                           		 $sql = "select COUNT(if(usertype='admin',1,NULL)) as admin from login";
								 $result=mysqli_query($data,$sql);
								while($row=mysqli_fetch_assoc($result))
								{
								 $admin = $row['admin'];                 
								 echo $admin;   
								}
                              ?>
                          </div>
                           </div>
                           <div class="video-card-body">
                              <div class="video-title">
                                 <a href="totaladmin.php">Total Admins</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                           <div class="video-card-image">
                              <a href="totaluser.php"><img class="img-fluid" src="img/allusers.png" alt=""></a>
                              <div class="num">
                              	<?php
                           		 $sql = "select COUNT(if(usertype='user',1,NULL)) as user from login";
								 $result=mysqli_query($data,$sql);
								while($row=mysqli_fetch_assoc($result))
								{
								 $user = $row['user'];                 
								 echo $user;   
								}
                              ?>
                              </div>
                           </div>
                           <div class="video-card-body">
                              <div class="video-title">
                                 <a href="totaluser.php">Total Users</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                           <div class="video-card-image">
                              <a href="test.php"><img class="img-fluid" src="img/overview.png" alt=""></a>
                           </div>
                           <div class="video-card-body">
                              <div class="video-title">
                                 <a href="test.php">Overviews</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                           <div class="video-card-image">
                              <a href="#"><img class="img-fluid" src="img/upload.png" alt=""></a>
                           </div>
                           <div class="video-card-body">
                              <div class="video-title">
                                 <a href="uploadvideo.php">Add Videos</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                           <div class="video-card-image">
                              <a href="#"><img class="img-fluid" src="img/live.png" alt=""></a>
                           </div>
                           <div class="video-card-body">
                              <div class="video-title">
                                 <a href="#">Live Games</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                           <div class="video-card-image">
                              <a href="gamelist.php"><img class="img-fluid" src="img/list.png" alt=""></a>
                           </div>
                           <div class="video-card-body">
                              <div class="video-title">
                                 <a href="gamelist.php">Game List</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                           <div class="video-card-image">
                              <a href="#"><img class="img-fluid" src="img/block.png" alt=""></a>
                           </div>
                           <div class="video-card-body">
                              <div class="video-title">
                                 <a href="#">Suspended Users</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                           <div class="video-card-image">
                              <a href="#"><img class="img-fluid" src="img/category.png" alt=""></a>
                           </div>
                           <div class="video-card-body">
                              <div class="video-title">
                                 <a href="uploadvideo.php">Categories</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>              
            </div>
         </div>
      </div>

            <!-- /.container-fluid -->
            <!-- Sticky Footer -->
            <footer class="sticky-footer">
               <div class="container">
                  <div class="row no-gutters">
                     <div class="col-lg-6 col-sm-6">
                        <p class="mt-1 mb-0"><strong class="text-dark">@Copyright:</strong>. 
                           <small class="mt-0 mb-0"><a class="text-primary" target="_blank" href="">Bisesh Shrestha</a>
                           </small>
                        </p>
                     </div>
                  </div>
               </div>
            </footer>
            
         </div>
         <!-- /.content-wrapper -->
      </div>
      <!-- /#wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="logout.php">Logout</a>
               </div>
            </div>
         </div>
      </div>
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