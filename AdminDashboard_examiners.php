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

                <!-- Material input name -->
                <div class="md-form form-sm">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="materialFormNameModalEx1" class="form-control form-control-sm" name="firstName">
                    <label for="materialFormNameModalEx1">First Name</label>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="materialFormNameModalEx1" class="form-control form-control-sm" name="lastName">
                    <label for="materialFormNameModalEx1">Last Name</label>
                </div>

                 <div class="md-form form-sm">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="materialFormNameModalEx1" class="form-control form-control-sm" name="examinerId">
                    <label for="materialFormNameModalEx1">Examiner Id</label>
                </div>

                <!-- Material input email -->
                <div class="md-form form-sm">
                    <i class="fa fa-lock prefix"></i>
                    <input type="text" id="materialFormEmailModalEx1" class="form-control form-control-sm" name="email">
                    <label for="materialFormEmailModalEx1">Email</label>
                </div>

                <!-- Material input subject -->
                <div class="md-form form-sm">
                    <i class="fa fa-tag prefix"></i>
                    <input type="text" id="materialFormSubjectModalEx1" class="form-control form-control-sm" name="faculty">
                    <label for="materialFormSubjectModalEx1">Faculty</label>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-tag prefix"></i>
                    <input type="text" id="materialFormSubjectModalEx1" class="form-control form-control-sm" name="dept">
                    <label for="materialFormSubjectModalEx1">Department</label>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-tag prefix"></i>
                    <input type="text" id="materialFormSubjectModalEx1" class="form-control form-control-sm" name="level">
                    <label for="materialFormSubjectModalEx1">Level</label>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-tag prefix"></i>
                    <input type="password" id="materialFormSubjectModalEx1" class="form-control form-control-sm" name="password">
                    <label for="materialFormSubjectModalEx1">Password</label>
                </div>

                

                <div class="text-center mt-4 mb-2">
                    <button class="btn btn-primary">Create Account
                        <i class="fa fa-send ml-2"></i>
                    </button>
                </div>

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
    

<div style="padding-top:20px; margin: 30px;">

  <!--Table-->
  <table class="table table-bordered">
    
        <!--Table head-->
        <thead class="mdb-color darken-3">
            <tr class="text-white">
                <th>#</th>
               
                <th style="width:50%">NAME</th>
                <th style="width:50%">ASSIGNED PROJECTS</th>
                
            </tr>
        </thead>
        <!--Table head-->
    
        <!--Table body-->
        <tbody class="white font-weight-bold" >
            <tr >
                <th scope="row">1</th>
               
                <td><div><p style="float:left;">Dr. Babatunde Sawyerr</p><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 light-blue accent-3" style="float:right;">View Examiner profile</button></div></td>
                <td><div><p style="float:left;">3 projects</p><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 light-blue accent-3" style="float:right;">View Assigned Projects</button></div></td>
               
            </tr>
            <tr>
                <th scope="row">2</th>
               
                <td><div><p style="float:left;">John Doe</p><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 light-blue accent-3" style="float:right;">View examiner profile</button></div></td>
                <td><div><p style="float:left;">No projects</p><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 light-blue accent-3 disabled" style="float:right;">View Assigned Projects</button></div></td>
            </tr>
            
            <tr>
                <th scope="row">3</th>
               
                <td><div><p style="float:left;">Adeola Oni</p><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 light-blue accent-3" style="float:right;">View examiner profile</button></div></td>
                <td><div><p style="float:left;">1 project</p><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 light-blue accent-3" style="float:right;">View Assigned Projects</button></div></td>
               
            </tr>
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