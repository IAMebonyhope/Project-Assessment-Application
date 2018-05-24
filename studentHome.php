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
            <a class="nav-link" href="AdminDashboard_students.html">Submit Projects <span class="sr-only">(current)</span></a>
            <hr>
            <a class="nav-link" href="AdminDashboard_examiners.html">Drafts</a>
            <hr>
            <a class="nav-link" href="gradingScale.html">Submitted Projects</a>
            
          </div>
          
      


</header>
<!--Main Navigation-->

<div  id="main" onclick="closeNav()">


       <div class="container">
        <ul class="progressbar ">
            <li class="active" id="progressAbstract">Abstract</li>
            <li id="progressLiterature">Literature Review</li>
            <li id="progressMethodology">Methodology</li>
            <li id="progressAnalysis">Analysis</li>
            <li id="progressConclusion">Conclusion</li>
    </ul>
       </div>  
       
       
    <div id="formAbstract" >

        <form>
            <!-- Grid row -->
            <div class="form-group row" style="padding-top:50px; width:100%; padding-left: 30px; padding-right: 30px;">
                <!-- Default input -->
                <label for="inputEmail3" class="col-sm-4 col-form-label"  style="font-weight: bold; text-align: center;">Project Title</label>
                <div  class="col-sm-8" >
                    <input type="email" class="form-control "  style="width:70%" id="inputEmail3" placeholder="Enter Title..." name="title">
                </div>
            </div>

            <div class="form-group row" style="padding-top:50px; width:100%; padding-left: 30px; padding-right: 30px;">
                <label for="inputEmail13" class="col-sm-4 col-form-label"  style="font-weight: bold; text-align: center;">Abstract</label>
            <div class="col-sm-8">
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea1" rows="10" name="abstract"></textarea>

            </div>
                
            </div>
            <div>
                    <p   class="light-blue-text"  style="float:left; padding-left:650px;;">*Maximum of 800 words</p>
                    <div class="animated fadeInDown" style="float:right; padding-right:50px; margin:30px;">
                       
                        <button type="button" class="btn btn-primary light-blue accent-3 z-depth-1">Save as Draft</button>
                        <button type="button" class="btn btn-primary light-blue accent-3 z-depth-1" id="btnNext_Abstract">Next</button>
                    </div>

            </div>
           
            </form>
    </div>

   

    <div id="formLiterature" >

        <form>
            <!-- Grid row -->
            
            <div class="form-group row" style="padding-top:50px; width:100%; padding-left: 30px; padding-right: 30px;">
                <label for="inputEmail13" class="col-sm-4 col-form-label"  style="font-weight: bold; text-align: center;">Literature Review</label>
            <div class="col-sm-8">
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea1" rows="10" name="litReview"></textarea>

            </div>
                
            </div>
            <div>
                    <p   class="light-blue-text"  style="float:left; padding-left:650px;;">*Maximum of 800 words</p>
                    <div class="animated fadeInDown" style="float:right; padding-right:50px; margin:30px;">
                        <button type="button" class="btn btn-primary light-blue accent-3 z-depth-1" id="btnPrev_Literature">Previous</button>
                        <button type="button" class="btn btn-primary light-blue accent-3 z-depth-1">Save as Draft</button>
                        <button type="button" class="btn btn-primary light-blue accent-3 z-depth-1"id="btnNext_Literature">Next</button>
                    </div>

            </div>
           
            </form>
    </div>
    
  
    <div id="formMethodology">

        <form>
            <!-- Grid row -->
            
            <div class="form-group row" style="padding-top:50px; width:100%; padding-left: 30px; padding-right: 30px;">
                <label for="inputEmail13" class="col-sm-4 col-form-label"  style="font-weight: bold; text-align: center;">Methodology</label>
            <div class="col-sm-8">
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea1" rows="10" name="methodology"></textarea>

            </div>
                
            </div>
            <div>
                    <p   class="light-blue-text"  style="float:left; padding-left:650px;;">*Maximum of 800 words</p>
                    <div class="animated fadeInDown" style="float:right; padding-right:50px; margin:30px;">
                        <button type="button" class="btn btn-primary light-blue accent-3 z-depth-1" id="btnPrev_Methodology">Previous</button>
                        <button type="button" class="btn btn-primary light-blue accent-3 z-depth-1">Save as Draft</button>
                        <button type="button" class="btn btn-primary light-blue accent-3 z-depth-1" id="btnNext_Methodology">Next</button>
                    </div>

            </div>
           
            </form>
    </div>

    <div id="formAnalysis">

        <form>
            <!-- Grid row -->
            
            <div class="form-group row" style="padding-top:50px; width:100%; padding-left: 30px; padding-right: 30px;">
                <label for="inputEmail13" class="col-sm-4 col-form-label"  style="font-weight: bold; text-align: center;">Analysis</label>
            <div class="col-sm-8">
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea1" rows="10" name="analysis"></textarea>

            </div>
                
            </div>
            <div>
                    <p   class="light-blue-text"  style="float:left; padding-left:650px;;">*Maximum of 800 words</p>
                    <div class="animated fadeInDown" style="float:right; padding-right:50px; margin:30px;">
                        <button type="button" class="btn btn-primary light-blue accent-3 z-depth-1"id="btnPrev_Analysis">Previous</button>
                        <button type="button" class="btn btn-primary light-blue accent-3 z-depth-1">Save as Draft</button>
                        <button type="button" class="btn btn-primary light-blue accent-3 z-depth-1" id="btnNext_Analysis">Next</button>
                    </div>

            </div>
           
            </form>
    </div>

   

    <div id="formConclusion">

        <form>
            <!-- Grid row -->
            
            <div class="form-group row" style="padding-top:50px; width:100%; padding-left: 30px; padding-right: 30px;">
                <label for="inputEmail13" class="col-sm-4 col-form-label"  style="font-weight: bold; text-align: center;">Conclusion</label>
            <div class="col-sm-8">
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea1" rows="10" name="conclusion"></textarea>

            </div>
                
            </div>
            <div>
                    <p   class="light-blue-text"  style="float:left; padding-left:650px;;">*Maximum of 800 words</p>
                    <div class="animated fadeInDown" style="float:right; padding-right:50px; margin:30px;">
                        <button type="button" class="btn btn-primary light-blue accent-3 z-depth-1" id="btnPrev_Conclusion">Previous</button>
                        <button type="button" class="btn btn-primary light-blue accent-3 z-depth-1">Save as Draft</button>
                        <button type="button" class="btn btn-primary light-blue accent-3 z-depth-1" id="btnNext_Conclusion">Next</button>
                    </div>

            </div>
           
            </form>
    </div>
    
</div>
  
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

    <script>
        $( document ).ready(function() {
            $("#formAbstract").show();
            $("#formLiterature").hide();
            $("#formMethodology").hide();
            $("#formAnalysis").hide();
            $("#formConclusion").hide();


});

        $("#btnNext_Abstract").click(function(){
    $("#formAbstract").hide();
    $("#formLiterature").show();
    $("#progressLiterature").addClass("active");
});

     $("#btnNext_Literature").click(function(){
    $("#formLiterature").hide();
    $("#formMethodology").show();
    $("#progressMethodology").addClass("active");
});

     $("#btnNext_Methodology").click(function(){
    $("#formMethodology").hide();
    $("#formAnalysis").show();
    $("#progressAnalysis").addClass("active");
});

     $("#btnNext_Analysis").click(function(){
    $("#formAnalysis").hide();
    $("#formConclusion").show();
    $("#progressConclusion").addClass("active");
});

   $("#btnPrev_Conclusion").click(function(){
    $("#formConclusion").hide();
    $("#formAnalysis").show();
    $("#progressConclusion").removeClass("active");
});

  $("#btnPrev_Analysis").click(function(){
    $("#formAnalysis").hide();
    $("#formMethodology").show();
    $("#progressAnalysis").removeClass("active");
});

$("#btnPrev_Methodology").click(function(){
    $("#formMethodology").hide();
    $("#formLiterature").show();
    $("#progressMethodology").removeClass("active");
});

$("#btnPrev_Literature").click(function(){
    $("#formLiterature").hide();
    $("#formAbstract").show();
    $("#progressLiterature").removeClass("active");
});

    </script>
</body>

</html>
