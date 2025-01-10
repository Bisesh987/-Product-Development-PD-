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
      <title>Upload Video</title>
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
                  <a class="dropdown-item" href="settings.php"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
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
               <i class="fas fa-fw fa-video"></i>
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
               <a class="nav-link" href="test.php">
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
            </div>
         <div id="content-wrapper">
            <div class="container-fluid upload-details">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="main-title">
                        <h6>Upload Details</h6>
                     </div>
                  </div>
                  <div class="col-lg-2">
                     <div class="imgplace"></div>
                  </div>
                  <div class="col-lg-10">
                     <div class="osahan-title">Nepal VS Australia</div>
                     <div class="osahan-size">102.6 MB . 2:13 MIN Remaining</div>
                     <div class="osahan-progress">
                        <div class="progress">
                           <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"   aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>
                        <div class="osahan-close">
                           <a href="#"><i class="fas fa-times-circle"></i></a>
                        </div>
                     </div>
                     <div class="osahan-desc">Your Video is still uploading, please keep this page open until it's done.</div>
                  </div>
               </div>
               <hr>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="osahan-form">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="e1">Video Title</label>
                                 <input type="text" placeholder="Please enter video title" id="e1" class="form-control">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="e2">About</label>
                                 <textarea rows="3" id="e2" name="e2" class="form-control">Description</textarea>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-3">
                              <div class="form-group">
                                 <label for="e3">Orientation</label>
                                 <select id="e3" class="custom-select">
                                    <option>Straight</option>
                                    <option>Live</option>
                                    <option>Re-Live</option>

                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-3">
                              <div class="form-group">
                                 <label for="e4">Privacy Settings</label>
                                 <select id="e4" class="custom-select">
                                    <option>Public</option>
                                    <option>Private</option>
                                    <option>Users</option>
                                    <option>Admin</option>
                                    <option>Paid Suscription</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-3">
                              <div class="form-group">
                                 <label for="e5">Monetize</label>
                                 <select id="e5" class="custom-select">
                                    <option>Yes</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-3">
                              <div class="form-group">
                                 <label for="e6">License</label>
                                 <select id="e6" class="custom-select">
                                    <option>Standard</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-5">
                              <div class="form-group">
                                 <label for="e7">Tags (13 Tags Remaining)</label>
                                 <input type="text" placeholder="Gaming, PS4" id="e7" class="form-control">
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="e8">Cast (Optional)</label>
                                 <input type="text" placeholder="Nathan Drake," id="e8" class="form-control">
                              </div>
                           </div>
                           <div class="col-lg-3">
                              <div class="form-group">
                                 <label for="e9">Language in Video (Optional)</label>
                                 <select id="e9" class="custom-select">
                                    <option>English</option>
                                    <option>Nepali</option>
                                    <option>Hindi</option>
                                    <option>Russian</option>
                                    <option>Chinese</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="row ">
                           <div class="col-lg-12">
                              <div class="main-title">
                                 <h6>Category ( you can select upto 6 categories )</h6>
                              </div>
                           </div>
                        </div>
                        <div class="row category-checkbox">
                           <!-- checkbox 1col -->
                           <div class="col-lg-2 col-xs-6 col-4">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck1">
                                 <label class="custom-control-label" for="customCheck1">Archery</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck2">
                                 <label class="custom-control-label" for="customCheck2">Artistic swimming</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck3">
                                 <label class="custom-control-label" for="customCheck3">Badminton</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck4">
                                 <label class="custom-control-label" for="customCheck4">Basketball</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck5">
                                 <label class="custom-control-label" for="customCheck5">Boxing</label>
                              </div>
                           </div>
                           <!-- checkbox 2col -->
                           <div class="col-lg-2 col-xs-6 col-4">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="zcustomCheck1">
                                 <label class="custom-control-label" for="zcustomCheck1">Cycling</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="zcustomCheck2">
                                 <label class="custom-control-label" for="zcustomCheck2">Canoeing</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="zcustomCheck3">
                                 <label class="custom-control-label" for="zcustomCheck3">Diving</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="zcustomCheck4">
                                 <label class="custom-control-label" for="zcustomCheck4">Equestrian</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="zcustomCheck5">
                                 <label class="custom-control-label" for="zcustomCheck5">Field hockey</label>
                              </div>
                           </div>
                           <!-- checkbox 3col -->
                           <div class="col-lg-2 col-xs-6 col-4">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="czcustomCheck1">
                                 <label class="custom-control-label" for="czcustomCheck1">Gymnastics</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="czcustomCheck2">
                                 <label class="custom-control-label" for="czcustomCheck2">Handball</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="czcustomCheck3">
                                 <label class="custom-control-label" for="czcustomCheck3">Judo</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="czcustomCheck4">
                                 <label class="custom-control-label" for="czcustomCheck4">Modern pentathlon</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="czcustomCheck5">
                                 <label class="custom-control-label" for="czcustomCheck5">Rugby sevens</label>
                              </div>
                           </div>
                           <!-- checkbox 1col -->
                           <div class="col-lg-2 col-xs-6 col-4">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck1">
                                 <label class="custom-control-label" for="customCheck1">Sailing</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck2">
                                 <label class="custom-control-label" for="customCheck2">Shooting</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck3">
                                 <label class="custom-control-label" for="customCheck3">Skateboarding</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck4">
                                 <label class="custom-control-label" for="customCheck4">Softball</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck5">
                                 <label class="custom-control-label" for="customCheck5">Sport climbing</label>
                              </div>
                           </div>
                           <!-- checkbox 2col -->
                           <div class="col-lg-2 col-xs-6 col-4">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="zcustomCheck1">
                                 <label class="custom-control-label" for="zcustomCheck1">Surfing</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="zcustomCheck2">
                                 <label class="custom-control-label" for="zcustomCheck2">Swimming</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="zcustomCheck3">
                                 <label class="custom-control-label" for="zcustomCheck3">Table tennis</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="zcustomCheck4">
                                 <label class="custom-control-label" for="zcustomCheck4">Taekwondo</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="zcustomCheck5">
                                 <label class="custom-control-label" for="zcustomCheck5">Tennis</label>
                              </div>
                           </div>
                           <!-- checkbox 3col -->
                           <div class="col-lg-2 col-xs-6 col-4">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="czcustomCheck1">
                                 <label class="custom-control-label" for="czcustomCheck1">Triathlon</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="czcustomCheck2">
                                 <label class="custom-control-label" for="czcustomCheck2">Volleyball</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="czcustomCheck3">
                                 <label class="custom-control-label" for="czcustomCheck3">Water polo</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="czcustomCheck4">
                                 <label class="custom-control-label" for="czcustomCheck4">Weightlifting</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="czcustomCheck5">
                                 <label class="custom-control-label" for="czcustomCheck5">Wrestling</label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="osahan-area text-center mt-3">
                        <button class="btn btn-outline-primary">Save Changes</button>
                     </div>
                     <hr>
                     <div class="terms text-center">
                        <p class="mb-0"><a href="#">Terms of Service</a> and <a href="#">Community Guidelines</a>.</p>
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
                  <a class="btn btn-primary" href="login.php">Logout</a>
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