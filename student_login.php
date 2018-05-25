<?php
include_once('php/controllers/StudentController.php');
session_start();

$error=array();

if(isset($_POST['login'])){
      
    $stuCtrl = new StudentController;

    $matricNo = $_POST['matricNo'];
    $password = $_POST['password'];

    $result = $stuCtrl->login($matricNo, $password);

    if(($stuCtrl->loginError == false) && ($result != null)){
        $_SESSION['student_id'] = $result['id'];
        header('Location: studentHome.php');
    }
    else{
        $error = $result;
    }
    
}

?>

<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="login.css" />
</head>

<body>
    <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <h1 style="color: white;">Student Login</h1>
        <hr style="width: 80%;">
        <span class="error"><?php echo $error['general'];?></span><br/><br/>

        <span class="error"><?php echo $error['matricNo'];?></span><br/>
        <input type="text" name="matricNo" placeholder="Matric No" class="input-control">
        <br>

        <span class="error"><?php echo $error['password'];?></span><br/>
        <input type="password" name="password" placeholder="PASSWORD" class="input-control">
        <br>
        <input type="submit" name="login" class="btn-control">
    </form>
</body>

</html>