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
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Students <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AdminDashboard_examiners.html">Examiners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Create student account</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">Create examiner account</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="gradingScale.html">Grading Scale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Projects</a>
                </li>
               
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
            <a class="nav-link" href="AdminDashboard_students.html">Students <span class="sr-only">(current)</span></a>
            <hr>
            <a class="nav-link" href="AdminDashboard_examiners.html">Examiners</a>
            <hr>
            <a class="nav-link" href="gradingScale.html">Grading Scale</a>
            <hr>
            <a class="nav-link" href="projects.html">Projects</a>
          </div>
          

</header>
<div id="main" onclick="closeNav()">
        <div style="padding-top:80px; margin: 30px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCreateGradeScaleForm">Create Grading Scale</button>
            </div>
            
            <div>
                 <!--Table-->
              <table class="table table-bordered" >
                
                <!--Table head-->
                <thead class="mdb-color darken-3">
                    <tr class="text-white" style="text-align:center;">
                        <th>#</th>
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
                    <tr class="text-center">
                        <th scope="row">1</th>
                        <td>Scale 1</td>
                        <td>10</td>
                        <td>15</td>
                        <td>15</td>
                        <td>40</td>
                        <td>20</td>
                        <td><div  class = "mx-auto"><button type="button" class="  mx-autokkk'  btn btn-primary btn-rounded btn-sm mr-5  light-blue accent-3 pull-left" data-toggle="modal" data-target="#modalCreateGradeScaleForm" id="editButton">Edit Scale</button>
                            <button type="button" class="  mx-auto btn btn-red btn-rounded btn-sm  red pull-right" >Delete Scale</button></div></td>
                        </tr>
                        
                        <tr class="text-center">
                            <th scope="row">2</th>
                            <td>Scale 2</td>
                            <td>10</td>
                            <td>15</td>
                            <td>15</td>
                            <td>40</td>
                            <td>20</td>
                            <td><div  class = "col-md-11 mx-auto"><button type="button" class=" col-md-4 mx-auto btn btn-primary btn-rounded btn-sm my-0 light-blue accent-3 pull-left" >Edit Scale</button><button type="button" class=" col-md-4 mx-auto btn btn-red btn-rounded btn-sm my-0 red pull-right" >Delete Scale</button></div></td>
                            </tr>
                            <tr style="text-align:center;">
                                <th scope="row">3</th>
                                <td>Scale Custom</td>
                                <td>10</td>
                                <td>15</td>
                                <td>15</td>
                                <td>40</td>
                                <td>20</td>
                                <td><div  class = "col-md-11 mx-auto"><button type="button" class=" col-md-4 mx-auto btn btn-primary btn-rounded btn-sm my-0 light-blue accent-3 pull-left" >Edit Scale</button><button type="button" class=" col-md-4 mx-auto btn btn-red btn-rounded btn-sm my-0 red pull-right" >Delete Scale</button></div></td>
                                </tr>
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
                        
                        <div class="modal-body mx-3">
                                <div class="md-form mb-5">
                                        <input type="text" id="form3" class="form-control validate">
                                        <label for="form3">NAME</label>
                                    </div>
                            <div class="md-form mb-5">
                                <input type="text" id="form3" class="form-control validate">
                                <label for="form3">ABSTRACT</label>
                            </div>
            
                            <div class="md-form mb-5">
                                <input type="text" id="form2" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="form2">LITERATURE REVIEW</label>
                            </div>
            
                            <div class="md-form mb-5">
                                <input type="text" id="form2" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="form2">METHODOLOGY</label>
                            </div>
            
                            <div class="md-form mb-5">
                                <input type="text" id="form2" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="form2">ANALYSIS</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="text" id="form2" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="form2">CONCLUSION</label>
                            </div>
            
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-indigo">Create Scale <i class="fa fa-paper-plane-o ml-1"></i></button>
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
