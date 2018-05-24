<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Students</title>
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
                    <i class="fa fa-pencil"></i> Create Student Account</h4>
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
                    <input type="text" id="materialFormNameModalEx1" class="form-control form-control-sm" name="matricNo">
                    <label for="materialFormNameModalEx1">Matriculation No.</label>
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
        Create Student Account
      </button>
      </div>
        
          <div style="padding-top:20px; margin: 30px;">
        <!--Table-->
        <table class="table table-bordered">
          
              <!--Table head-->
              <thead class="mdb-color darken-3">
                  <tr class="text-white">
                      <th>#</th>
                      <th style="width:25%">MATRICULATION NO.</th>
                      <th style="width:25%">NAME</th>
                      <th style="width:25%">PROJECT</th>
                      <th style="width:25%">PROJECT STATUS</th>
                  </tr>
              </thead>
              <!--Table head-->
          
              <!--Table body-->
              <tbody class="white font-weight-bold" >
                  <tr >
                      <th scope="row">1</th>
                      <td>14805020</td>
                      <td><div><p style="float:left;">Sojirin Seyikemi</p><button type="button"  data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-rounded btn-sm my-0 light-blue accent-3" style="float:right;">View student profile</button></div></td>
                      <td><div><p style="float:left;">2 projects</p><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 light-blue accent-3" style="float:right;">View Projects</button></div></td>
                      <td><div><div style="float:left;"><p class="badge2" data-badge="1" style="float:left;  margin-right:25px; "></p><p class="font-weight-bold" style="float:left; "> Unassigned Project</p></div><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 light-blue accent-3" style="float:right;" data-toggle="modal" data-target="#modalPoll">Assign Project</button></div></td>
                  </tr>
                  <tr>
                      <th scope="row">2</th>
                      <td>140805021</td>
                      <td><div><p style="float:left;">John Doe</p><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 light-blue accent-3" style="float:right;">View student profile</button></div></td>
                      <td><div><p style="float:left;">No projects</p><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 light-blue accent-3 disabled" style="float:right;">View Projects</button></div</td>
                      <td><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 disabled light-blue accent-3" style="float:right;">Assign Project</button></td>
                  </tr>
                  <tr>
                      <th scope="row">3</th>
                      <td>140805033</td>
                      <td><div><p style="float:left;">Adeola Oni</p><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 light-blue accent-3" style="float:right;">View student profile</button></div></td>
                      <td><div><p style="float:left;">1 project</p><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 light-blue accent-3" style="float:right;">View Projects</button></div></td>
                      <td><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 disabled light-blue accent-3" style="float:right;">Assign Project</button></td>
                  </tr>
              </tbody>
              <!--Table body-->
          
          </table>
          <!--Table-->
      
          </div>
          
      
      <!-- Modal: modalPoll -->
      <div class="modal fade" id="modalPoll" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
        data-backdrop="false">
        <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
          <div class="modal-content">
            <!--Header-->
            <div class="modal-header light-blue accent-3">
              <p class="heading lead">Assign Project
              </p>
      
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">×</span>
              </button>
            </div>
      
            <!--Body-->
            <div class="modal-body">
              <div class="text-center">
                <i class="fa fa-file-text-o fa-4x mb-3 animated rotateIn"></i>
                <p>
                  <strong>Project Title</strong>
                </p>
                <p>Matriculation Number:
                  <strong></strong>140805020</strong>
                </p>
                <p>Name:
                      <strong></strong>Seyikemi Sojirin</strong>
                    </p>
              </div>
      
              <hr>
              <div class="wrapper">
                      <span class="title">Select Examiners</span>
                      <hr/>
                      <div class="select-wrapper">
                              <span class="autocomplete-select"></span>
                            </div>
                            <script src="MDB Free/js/bundle.min.js"></script>
                            <script>
                              
                            
                              var autocomplete = new SelectPure(".autocomplete-select", {
                                options: [
                                  {
                                    label: "Dr. Sawyerr",
                                    value: "sa",
                                  },
                                  {
                                    label: "Dr. Odumiyuwa",
                                    value: "od",
                                  },
                                  {
                                    label: "Dr. Rufai",
                                    value: "ru",
                                  },
                                  {
                                    label: "Dr. Chika",
                                    value: "ch",
                                  },
                                  {
                                    label: "Dr. Ajayi",
                                    value: "aj",
                                  },
                                  {
                                    label: "Dr. Fashina",
                                    value: "fa",
                                  },
                                  {
                                    label: "Maccheroni",
                                    value: "ma",
                                  },
                                  {
                                    label: "Spaghetti",
                                    value: "sp",
                                  },
                                ],
                                value: ["aj"],
                                multiple: true,
                                autocomplete: true,
                                icon: "fa fa-times",
                                onChange: value => { console.log(value); },
                              });
                            </script>
                           
                    </div>
                  <hr>
              <!-- Radio -->
              <p class="text-center">
                <strong>Choose Grading Scale</strong>
              </p>
              <div class="form-check mb-4">
            <input class="form-check-input" name="group1" type="radio" id="radio-179" value="option1" checked>
            <label class="form-check-label" for="radio-179">Scale 1</label>
            <label style="padding-left:5px">|AB:10 |LR:30 |MT:20 |AN:20 |CN:20 |</label>
          </div> 
      
          <div class="form-check mb-4">
            <input class="form-check-input" name="group1" type="radio" id="radio-279" value="option2">
            <label class="form-check-label" for="radio-179">Scale 2</label>
            <label style="padding-left:5px">|AB:10 |LR:30 |MT:20 |AN:20 |CN:20 |</label>
          </div>
      
          <div class="form-check mb-4">
            <input class="form-check-input" name="group1" type="radio" id="radio-379" value="option3">
            <label class="form-check-label" for="radio-179">Scale 3</label>
            <label style="padding-left:5px">|AB:10 |LR:30 |MT:20 |AN:20 |CN:20 |</label>
          </div>
          <div class="form-check mb-4">
            <input class="form-check-input" name="group1" type="radio" id="radio-479" value="option4">
            <label class="form-check-label" for="radio-179">Scale 4</label>
            <label style="padding-left:5px">|AB:10 |LR:30 |MT:20 |AN:20 |CN:20 |</label>
          </div>
          <div class="form-check mb-4">
            <input class="form-check-input" name="group1" type="radio" id="radio-579" value="option5">
            <label class="form-check-label" for="radio-179">Scale 5</label>
            <label style="padding-left:5px">|AB:10 |LR:30 |MT:20 |AN:20 |CN:20 |</label>
          </div>
              <!-- Radio -->
      
              <p class="text-center">
                <strong>Add a message</strong>
              </p>
              <!--Basic textarea-->
              <div class="md-form">
                <textarea type="text" id="form79textarea" class="md-textarea form-control" rows="3"></textarea>
                <label for="form79textarea">Your message</label>
              </div>
      
            </div>
      
            <!--Footer-->
            <div class="modal-footer justify-content-center">
              <a type="button" class="btn btn-primary light-blue accent-3">Assign
                <i class="fa fa-paper-plane ml-1"></i>
              </a>
              <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Cancel</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal: modalPoll -->
      
      <!-- Modal: modalProfile --> 
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                         
                          <h4 style="margin:auto; float:left;" class="modal-title" id="myModalLabel">Student Profile</h4>
                          </div>
                      <div class="modal-body">
                          <center>
                          <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R"  width="140" height="140" border="0" class="img-circle"></a>
                          <h4 class="media-heading" style="padding-top:10px;">Seyikemi Sojirin</h4>
                          <p>140805020</p>
                          <p>Department: Computer Science</p>
                          <span><strong>Skills: </strong></span>
                              <span class="label label-warning">HTML5/CSS</span>
                              <span class="label label-info">Adobe CS 5.5</span>
                              <span class="label label-info">Microsoft Office</span>
                              <span class="label label-success">Windows XP, Vista, 7</span>
                          </center>
                          <hr>
                          <center>
                          <p class="text-left"><strong>Bio: </strong><br>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
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













<!-- Modal: modalProfile -->
</body>
</html>