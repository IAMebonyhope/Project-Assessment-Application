<?php
include_once('php/controllers/AdminController.php');
session_start();
if(!isset($_SESSION['user_id'])) header('location: Admin_login.php');

$admCtrl = new AdminController;

$examiners = $admCtrl->view_examiners();


$error = array();
$user = array();

if(isset($_POST['create-examiner'])){

    $user['email'] = $_POST['email'];
    $user['firstName'] = $_POST['firstName'];
    $user['lastName'] = $_POST['lastName'];
    $user['dept'] = $_POST['dept'];
    $user['faculty'] = $_POST['faculty'];
    $user['password'] = $_POST['password'];
    $user['adminId'] = $_SESSION['user_id'];

    $result = $admCtrl->create_examiner($user);
    
    if($result === true){
        header('Location: AdminDashboard_examiners.php');
    }
    else{
        $error = $result;
        
    }
    
}

 
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Examiner </title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="MDB Free/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="MDB Free/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="MDB Free/css/style.css" rel="stylesheet">
</head>

<body class="grey lighten-3">

    <!-- Start your project here-->
   
<!--Main Navigation-->
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark light-blue accent-3 scrolling-navbar">
        <a class="navbar-brand col-md-11 mx-auto" href="#"><strong> <span class="col-md-4" style="font-size:30px;cursor:pointer" onclick="openNav()" style="padding-right:20px;">&#9776;</span>Project Assesment Application</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav nav-flex-icons ">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="dropdown" aria-haspopup="true"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
                    <div class="dropdown-menu dropdown-menu-right z-depth-5">
                        <a class="dropdown-item" href="#">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="change-password.html">Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Logout</a>
                       
                    </div>
                </li>
                
            </ul>
        </div>
    </nav>

    <div id="mySidenav" class="sidenav" style="padding-top:150px;">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="padding-top:80px;">&times;</a>
            <a class="nav-link" href="AdminDashboard_students.php">Students <span class="sr-only">(current)</span></a>
            <hr>
            <a class="nav-link" href="AdminDashboard_examiners.php">Examiners</a>
            <hr>
            <a class="nav-link" href="gradingScale.php">Grading Scale</a>
            <hr>
            <a class="nav-link" href="projects.php">Projects</a>
    </div>
          
</header>

<div id="main" onclick="closeNav()">
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <!--Modal: Contact form-->
    <div class="modal-dialog cascading-modal" role="document">

        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header primary-color white-text">
                <h4 class="title">
                    <i class="fa fa-pencil"></i> Create Examiner Account</h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body">
            <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">

                <span class="error"><?php echo $error['general'];?></span><br/><br/>
                <!-- Material input name -->
                <div class="md-form form-sm">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="materialFormNameModalEx1" class="form-control form-control-sm" name="firstName" value="<?php echo isset($_POST['firstName']) ? $_POST['firstName'] : ''; ?>">
                    <label for="materialFormNameModalEx1">First Name</label>
                    <span class="error"><?php echo $error['firstName'];?></span><br/>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="materialFormNameModalEx1" class="form-control form-control-sm" name="lastName" value="<?php echo isset($_POST['lastName']) ? $_POST['lastName'] : ''; ?>">
                    <label for="materialFormNameModalEx1">Last Name</label>
                    <span class="error"><?php echo $error['lastName'];?></span><br/>
                </div>

                 <div class="md-form form-sm">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="materialFormNameModalEx1" class="form-control form-control-sm" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                    <label for="materialFormNameModalEx1">Email</label>
                    <span class="error"><?php echo $error['email'];?></span><br/>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="materialFormNameModalEx1" class="form-control form-control-sm" name="faculty" value="<?php echo isset($_POST['faculty']) ? $_POST['faculty'] : ''; ?>">
                    <label for="materialFormNameModalEx1">Faculty</label>
                    <span class="error"><?php echo $error['faculty'];?></span><br/>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="materialFormNameModalEx1" class="form-control form-control-sm" name="dept" value="<?php echo isset($_POST['dept']) ? $_POST['dept'] : ''; ?>">
                    <label for="materialFormNameModalEx1">Department</label>
                    <span class="error"><?php echo $error['dept'];?></span><br/>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="password" id="materialFormNameModalEx1" class="form-control form-control-sm" name="password">
                    <label for="materialFormNameModalEx1">Password</label>
                    <span class="error"><?php echo $error['password'];?></span><br/>
                </div>

                

                <div class="text-center mt-4 mb-2">
                    <input type="submit" name="create-examiner" value="CREATE ACCOUNT" class="btn btn-primary">
                </div>
            </form>
            </div>
        </div>
        <!--/.Content-->
    </div>
    
    <!--/Modal: Contact form-->
</div>
<div style="padding-top: 80px; margin:30px;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalContactForm">
    Create Examiner Account
</button>
</div> 
</div>

 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                         
                          <h4 style="margin:auto; float:left;" class="modal-title" id="myModalLabel">Examiner Profile</h4>
                          </div>
                      <div class="modal-body">
                          <center>
                          <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R"  width="140" height="140" border="0" class="img-circle"></a>
                          <h4  class="media-heading" style="padding-top:40px;">Dr. Babatunde Sawyerr</h4>
                          <p>Computer Science</p>
                          
                         
                          </center>
                          <hr>
                          <center>
                          
                          <br>
                          </center>
                      </div>
                      <div class="modal-footer">
                          <center>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Done</button>
                          </center>
                      </div>
                  </div>
              </div>
          </div>
</div>

<div style="padding-top:20px; margin: 30px;">

  <!--Table-->
  <table class="table table-bordered">
    
        <!--Table head-->
        <?php if((!is_array($examiners)) || ($examiners == null)){ ?>
        <thead class="mdb-color darken-3">
            <tr class="text-white">
                No examiner available                
            </tr>
        </thead>
        <?php } else{ ?>
        <thead class="mdb-color darken-3">
            <tr class="text-white">
                <th style="width:50%">NAME</th>
                <th style="width:50%">ASSIGNED PROJECTS</th>
                
            </tr>
        </thead>
        <!--Table head-->
    
        <!--Table body-->
        <tbody class="white font-weight-bold" >
        <?php if(is_array($examiners[1])){foreach($examiners as $examiner){ ?>
            <tr >
                <td><div><p style="float:left;"><?php echo ($examiner['lastName'] . " " . $examiner['firstName'] )?></p><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 light-blue accent-3" style="float:right;">View Examiner profile</button></div></td>
                <td><div><p style="float:left;"><?php echo (count($examiner['projects']) )?></p><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 light-blue accent-3" style="float:right;">View Assigned Projects</button></div></td>
               
            </tr>
        <?php } }else{?>
            <tr >              
                <td><div><p style="float:left;"><?php echo ($examiners['lastName'] . " " . $examiners['firstName'] )?></p><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 light-blue accent-3" style="float:right;">View Examiner profile</button></div></td>
                <td><div><p style="float:left;"><?php echo (count($examiners['projects']) )?></p><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 light-blue accent-3" style="float:right;">View Assigned Projects</button></div></td>
               
            </tr>
        <?php } }?>
        </tbody>
        <!--Table body-->
    
    </table>
    <!--Table-->

    </div>
  

 <!-- SCRIPTS -->
   </div>
 <script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
}



</script>
    <!-- JQuery -->
    <script type="text/javascript" src="MDB Free/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="MDB Free/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="MDB Free/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="MDB Free/js/mdb.min.js"></script>
</body>
</html>