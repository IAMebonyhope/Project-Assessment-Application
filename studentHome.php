<?php
include_once('php/controllers/StudentController.php');
session_start();
if(!isset($_SESSION['student_id'])) header('location:student_login.php');

$admCtrl = new StudentController;

$error = array();
$project = array();

if(isset($_POST['create-project'])){
    $project['title'] = $_POST['title'];
    $project['abstract'] = $_POST['abstract'];
    $project['litReview'] = $_POST['litReview'];
    $project['methodology'] = $_POST['methodology'];
    $project['analysis'] = $_POST['analysis'];
    $project['conclusion'] = $_POST['conclusion'];
    $project['studentId'] = $_SESSION['student_id'];

    $result = $admCtrl->create_project($project);
    
    if($result === true){
        header('Location: index.html');
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
    <title>Create-Project</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="MDB Free/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="MDB Free/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="MDB Free/css/style.css" rel="stylesheet">
</head>

<body class="grey lighten-3" id="body">

    <!-- Start your project here-->
   
<!--Main Navigation-->
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark light-blue accent-3 scrolling-navbar">
        <a class="navbar-brand col-md-11 mx-auto" href="#"><strong> <span class="col-md-4" style="font-size:30px;cursor:pointer" onclick="openNav()" style="padding-right:20px;">&#9776;</span>Project Assesment Application</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav nav-flex-icons">
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
            <a class="nav-link" href="AdminDashboard_students.html">Submit Project <span class="sr-only">(current)</span></a>
            <hr>
            <a class="nav-link" href="gradingScale.html">Submitted Projects</a>
            
          </div>
          
      


</header>
<!--Main Navigation-->
  
    <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">  
       
    <div id="formAbstract" >

        
            <br/><br/>
            <br/><br/>
            <span class="error"><?php echo $error['general'];?></span><br/><br/>
            <!-- Grid row -->
            <div class="form-group row" style="padding-top:50px; width:100%; padding-left: 30px; padding-right: 30px;">
                <!-- Default input -->
                <label for="inputEmail3" class="col-sm-4 col-form-label"  style="font-weight: bold; text-align: center;">Project Title</label>
                <div  class="col-sm-8" >
                    <input type="text" class="form-control "  style="width:100%" id="inputEmail3" placeholder="Enter Title..." name="title" value="<?php echo isset($_POST['title']) ? $_POST['title'] : ''; ?>">
                    <span class="error"><?php echo $error['title'];?></span><br/>
                </div>
            </div>

            <div class="form-group row" style="padding-top:50px; width:100%; padding-left: 30px; padding-right: 30px;">
                <label for="inputEmail13" class="col-sm-4 col-form-label"  style="font-weight: bold; text-align: center;">Abstract</label>
            <div class="col-sm-8">
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea1" rows="10" name="abstract"><?php echo isset($_POST['abstract']) ? $_POST['abstract'] : ''; ?></textarea>
                <span class="error"><?php echo $error['abstract'];?></span><br/>
            </div>
                
            </div>
            <div>
                    <p   class="light-blue-text"  style="float:left; padding-left:650px;;">*Maximum of 800 words</p>
                    

            </div>
           
            
    </div>

   

    <div id="formLiterature" >

            <!-- Grid row -->
            
            <div class="form-group row" style="padding-top:50px; width:100%; padding-left: 30px; padding-right: 30px;">
                <label for="inputEmail13" class="col-sm-4 col-form-label"  style="font-weight: bold; text-align: center;">Literature Review</label>
            <div class="col-sm-8">
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea1" rows="10" name="litReview"><?php echo isset($_POST['litReview']) ? $_POST['litReview'] : ''; ?></textarea>
                <span class="error"><?php echo $error['litReview'];?></span><br/>
            </div>
                
            </div>
            <div>
                    <p   class="light-blue-text"  style="float:left; padding-left:650px;;">*Maximum of 800 words</p>
                   

            </div>
           

    </div>
    
  
    <div id="formMethodology">

            <!-- Grid row -->
            
            <div class="form-group row" style="padding-top:50px; width:100%; padding-left: 30px; padding-right: 30px;">
                <label for="inputEmail13" class="col-sm-4 col-form-label"  style="font-weight: bold; text-align: center;">Methodology</label>
            <div class="col-sm-8">
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea1" rows="10" name="methodology"><?php echo isset($_POST['methodology']) ? $_POST['methodology'] : ''; ?></textarea>
                <span class="error"><?php echo $error['methodology'];?></span><br/>
            </div>
                
            </div>
            <div>
                    <p   class="light-blue-text"  style="float:left; padding-left:650px;;">*Maximum of 800 words</p>
                    

            </div>

    </div>

    <div id="formAnalysis">


            <!-- Grid row -->
            
            <div class="form-group row" style="padding-top:50px; width:100%; padding-left: 30px; padding-right: 30px;">
                <label for="inputEmail13" class="col-sm-4 col-form-label"  style="font-weight: bold; text-align: center;">Analysis</label>
            <div class="col-sm-8">
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea1" rows="10" name="analysis"><?php echo isset($_POST['analysis']) ? $_POST['analysis'] : ''; ?></textarea>
                <span class="error"><?php echo $error['analysis'];?></span><br/>
            </div>
                
            </div>
            <div>
                    <p   class="light-blue-text"  style="float:left; padding-left:650px;;">*Maximum of 800 words</p>
                   

            </div>
           
    </div>

   

    <div id="formConclusion">


            <!-- Grid row -->
            
            <div class="form-group row" style="padding-top:50px; width:100%; padding-left: 30px; padding-right: 30px;">
                <label for="inputEmail13" class="col-sm-4 col-form-label"  style="font-weight: bold; text-align: center;">Conclusion</label>
            <div class="col-sm-8">
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea1" rows="10" name="conclusion"><?php echo isset($_POST['conclusion']) ? $_POST['conclusion'] : ''; ?></textarea>
                <span class="error"><?php echo $error['conclusion'];?></span><br/>
            </div>
                
            </div>
            <div>
                    <p   class="light-blue-text"  style="float:left; padding-left:650px;;">*Maximum of 800 words</p>
                    <div class="animated fadeInDown" style="float:right; padding-right:50px; margin:30px;">                        
                        <input type="submit" name="create-project" value="SUBMIT" class="btn btn-primary">
                    </div>

            </div>
           
            
    </div>
    
</div>

</form>
    <!-- /Start your project here-->

    <!-- SCRIPTS -->
   
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
