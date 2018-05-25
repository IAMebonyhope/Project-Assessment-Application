<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Assigned Projects</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
 
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <style>
    .bg-dark{
      background-color: #020550 !important;
    }
    table a{
      text-decoration: none !important;
    }
  </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Project Assessment Application</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="profile.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Profile</span>
          </a>
        </li>
        
        <li class="nav-item" class="active" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Assigned Projects</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-gear"></i>
            <span class="nav-link-text">Settings</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="change-password.html"> Change Password</a>
            </li>
            <li>
              <a href="login.html">Log out</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
     
      <div style="margin-left:80%;color:antiquewhite;">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-fw fa-sign-out"></i>Logout</a>
    </div>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Graded Projects</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Project Title</th>
                </tr>
              </thead>
  
              <tbody>
                  <td> <a href="gradedproject.php">MEDICAL TEST RESULT INFORMATION SYSTEM</a></td>
                </tr>
                <tr>
                  <td> <a href="gradedproject.html">COURSE REGISTRATION AND RESULT PROCESSING SYSTEM </a></td>
                </tr>
                <tr>
                  <td><a href="gradedproject.html"> COMPUTERIZED POINT OF SALES SYSTEM </a></td>
                </tr>
                <tr>
                  <td><a href="gradedproject.html"> ELECTRONIC VOTERS REGISTRATION SYSTEM </a></td> 
                </tr>
                <tr>
                  <td> <a href="gradedproject.html">GSM BASED REMOTE SWITCHING SYSTEM </a></td>
                </tr>
                <tr>
                  <td><a href="gradedproject.html"> ELECTRONIC COURSE FORM REGISTRATION </a></td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i> Ungraded Projects</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Project Title</th>
                  </tr>
                </thead>
    
                <tbody>
                      <tr>
                        <td> <a href="project2.html">COMPUTERISED PHARMACY MANAGEMENT SYSTEM</a> </td>
                      </tr>
                      <tr>
                        <td> <a href="project2.html">COMPUTERIZED FARM MANAGEMENT INFORMATION SYSTEM</a></td>
                      </tr>
                      <tr>
                        <td> <a href="project2.html">VIRTUAL E-LEARNING SYSTEM </a></td>
                      </tr>
                      <tr>
                        <td><a href="project2.html">STUDENT INFORMATION MANAGEMENT SYSTEM</a></td>
                      <tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  
    </div>

    



    
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
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
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>