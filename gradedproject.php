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
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <style>
    .bg-dark{
      background-color: #020550 !important;
    }
    table a{
      text-decoration: none !important;
    }
    textarea{
        width: 100% !important;
        height:50vh !important;
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
                <a class="nav-link" href="profile.php">
                  <i class="fa fa-fw fa-dashboard"></i>
                  <span class="nav-link-text">Profile</span>
                </a>
              </li>
              
              <li class="nav-item" class="active" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="tables.php">
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
                    <a href="change-password.php"> Change Password</a>
                  </li>
                  <li>
                    <a href="Examinr_login.html">Log out</a>
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
            <div class="col-md-12">
                    <form class="form-horizontal">
                            <div class="form-group">
                              <label  class="col-sm-2 control-label">Project Title</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" placeholder="" readonly>
                              </div>
                            </div>
                            <div class="form-group">
                              <label  class="col-sm-2 control-label">Abstract</label>
                              <div class="col-sm-10">
                                    <textarea class="form-control" readonly></textarea>
                              </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Literature Review</label>
                                <div class="col-sm-10">
                                        <textarea class="form-control" readonly></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Methodology</label>
                                <div class="col-sm-10">
                                        <textarea class="form-control" readonly></textarea>
                                </div>
                           </div>
                            
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Analysis</label>
                                <div class="col-sm-10">
                                        <textarea class="form-control" readonly></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Conclusion</label>
                                <div class="col-sm-10">
                                        <textarea class="form-control" readonly></textarea>
                                </div>   
                           </div>
                 </div>
            </div>
            

        </div> 
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
                    <a class="btn btn-primary" href="Examiner_login.html">Logout</a>
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
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
  </div>
</body>

</html>
