<?php
include_once('php/controllers/AdminController.php');
session_start();
if(!isset($_SESSION['user_id'])) header('location: Admin_login.php');

$admCtrl = new AdminController;

$grades = $admCtrl->view_grades();

$error = array();
$user = array();

if(isset($_POST['create-grade'])){

    $user['name'] = $_POST['name'];
    $user['abstract'] = $_POST['abstract'];
    $user['methodology'] = $_POST['methodology'];
    $user['litReview'] = $_POST['litReview'];
    $user['analysis'] = $_POST['analysis'];
    $user['conclusion'] = $_POST['conclusion'];
    $user['adminId'] = $_SESSION['user_id'];

    $result = $admCtrl->create_grade($user);
    var_dump($result);
    die();
    if($result === true){
        header('Location: gradingScale.php');
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
    <title>Material Design Bootstrap</title>
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

            </ul>
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
        <div style="padding-top:80px; margin: 30px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCreateGradeScaleForm">Create Grading Scale</button>
            </div>
            
            <div>
                 <!--Table-->
              <table class="table table-bordered" >
                <?php if((!is_array($grades)) || ($grades == null)){ ?>
                <thead class="mdb-color darken-3">
                    <tr class="text-white">
                        No grade scale available                
                    </tr>
                </thead>
                <?php } else{ ?>
                <!--Table head-->
                <thead class="mdb-color darken-3">
                    <tr class="text-white" style="text-align:center;">
                        <th style="width:25%">SCALE NAME</th>
                        <th style="width:10%">ABSTRACT</th>
                        <th style="width:10%">LITERATURE REVIEW</th>
                        <th style="width:10%">METHODOLOGY</th>
                        <th style="width:10%">ANALYSIS</th>
                        <th style="width:10%">CONCLUSION</th>
                        <th style="width:25%">EDIT SCALE</th>
                    </tr>
                </thead>
                <!--Table head-->
            
                <!--Table body-->
                <tbody class="white font-weight-bold" id="gradeTable" >
                    <?php if(is_array($grades[1])){foreach($grades as $grade){ ?>
                    <tr class="text-center">
                        <td><?php echo ($grade['name'])?></td>
                        <td><?php echo ($grade['abstract'])?></td>
                        <td><?php echo ($grade['litReview'])?></td>
                        <td><?php echo ($grade['methodology'])?></td>
                        <td><?php echo ($grade['analysis'])?></td>
                        <td><?php echo ($grade['conclusion'])?></td>
                        <td><div  class = "mx-auto"><button type="button" class="  mx-autokkk'  btn btn-primary btn-rounded btn-sm mr-5  light-blue accent-3 pull-left" data-toggle="modal" data-target="#modalCreateGradeScaleForm" id="editButton">Edit Scale</button>
                            <button type="button" class="  mx-auto btn btn-red btn-rounded btn-sm  red pull-right" >Delete Scale</button></div></td>
                    </tr>
                    <?php } }else{?>
                     <tr class="text-center">
                        <td><?php echo ($grades['name'])?></td>
                        <td><?php echo ($grades['abstract'])?></td>
                        <td><?php echo ($grades['litReview'])?></td>
                        <td><?php echo ($grades['methodology'])?></td>
                        <td><?php echo ($grades['analysis'])?></td>
                        <td><?php echo ($grades['conclusion'])?></td>
                        <td><div  class = "mx-auto"><button type="button" class="  mx-autokkk'  btn btn-primary btn-rounded btn-sm mr-5  light-blue accent-3 pull-left" data-toggle="modal" data-target="#modalCreateGradeScaleForm" id="editButton">Edit Scale</button>
                            <button type="button" class="  mx-auto btn btn-red btn-rounded btn-sm  red pull-right" >Delete Scale</button></div></td>
                    </tr>
                    <?php } }?>
                </tbody>
                <!--Table body-->
            
            </table>
            <!--Table-->
            
            </div>
            
            
            <div class="modal fade" id="modalCreateGradeScaleForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Create Grade Scale</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <div class="modal-body">
                        <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">

                            <span class="error"><?php echo $error['general'];?></span><br/><br/>
                            <!-- Material input name -->
                            <div class="md-form form-sm">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="materialFormNameModalEx1" class="form-control form-control-sm" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
                                <label for="materialFormNameModalEx1">Name</label>
                                <span class="error"><?php echo $error['name'];?></span><br/>
                            </div>

                            <div class="md-form form-sm">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="materialFormNameModalEx1" class="form-control form-control-sm" name="abstract" value="<?php echo isset($_POST['abstract']) ? $_POST['abstract'] : ''; ?>">
                                <label for="materialFormNameModalEx1">Abstract</label>
                                <span class="error"><?php echo $error['abstract'];?></span><br/>
                            </div>

                            <div class="md-form form-sm">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="materialFormNameModalEx1" class="form-control form-control-sm" name="litReview" value="<?php echo isset($_POST['litReview']) ? $_POST['litReview'] : ''; ?>">
                                <label for="materialFormNameModalEx1">Literature Review</label>
                                <span class="error"><?php echo $error['litReview'];?></span><br/>
                            </div>

                            <div class="md-form form-sm">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="materialFormNameModalEx1" class="form-control form-control-sm" name="methodology" value="<?php echo isset($_POST['methodology']) ? $_POST['methodology'] : ''; ?>">
                                <label for="materialFormNameModalEx1">Methodology</label>
                                <span class="error"><?php echo $error['methodology'];?></span><br/>
                            </div>

                            <div class="md-form form-sm">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="materialFormNameModalEx1" class="form-control form-control-sm" name="analysis" value="<?php echo isset($_POST['analysis']) ? $_POST['analysis'] : ''; ?>">
                                <label for="materialFormNameModalEx1">Analysis</label>
                                <span class="error"><?php echo $error['analysis'];?></span><br/>
                            </div>

                            <div class="md-form form-sm">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="materialFormNameModalEx1" class="form-control form-control-sm" name="conclusion" value="<?php echo isset($_POST['conclusion']) ? $_POST['conclusion'] : ''; ?>">
                                <label for="materialFormNameModalEx1">Conclusion</label>
                                <span class="error"><?php echo $error['conclusion'];?></span><br/>
                            </div>

                            

                            <div class="text-center mt-4 mb-2">
                                <input type="submit" name="create-grade" value="CREATE SCALE" class="btn btn-primary">
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalEditGradeScaleForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Edit Grade Scale</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <div class="modal-body mx-3">
                                <div class="md-form mb-5">
                                        <input type="text" id="formName" class="form-control validate">
                                        <label for="form3">NAME</label>
                                    </div>
                            <div class="md-form mb-5">
                                <input type="text" id="formAbstract" class="form-control validate">
                                <label for="form3">ABSTRACT</label>
                            </div>
            
                            <div class="md-form mb-5">
                                <input type="text" id="formLit" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="form2">LITERATURE REVIEW</label>
                            </div>
            
                            <div class="md-form mb-5">
                                <input type="text" id="formMethodology" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="form2">METHODOLOGY</label>
                            </div>
            
                            <div class="md-form mb-5">
                                <input type="text" id="formAnalysis" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="form2">ANALYSIS</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="formConclusion" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="form2">CONCLUSION</label>
                            </div>
            
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-indigo">Save Changes <i class="fa fa-paper-plane-o ml-1"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            
</div>


                





 <!-- SCRIPTS -->
   
    <!-- JQuery -->
    <script type="text/javascript" src="MDB Free/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="MDB Free/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="MDB Free/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="MDB Free/js/mdb.min.js"></script>

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

</body>

</html>
