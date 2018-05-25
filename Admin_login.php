<?php
include_once('php/controllers/AdminController.php');
session_start();

$error=array();

if(isset($_POST['login'])){
      
    $admCtrl = new AdminController;

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $admCtrl->login($email, $password);

    if($admCtrl->loginError == false){
        $_SESSION['user_id'] = $result['id'];
        header('Location: AdminDashboard_examiners.php');
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
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="login.css" />
</head>

<body>
    <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <h1 style="color: white;">Admin Login</h1>
        <hr style="width: 80%;">
        <span class="error"><?php echo $error['general'];?></span><br/><br/>

        <span class="error"><?php echo $error['email'];?></span><br/>
        <input type="text" name="email" placeholder="EMAIL ADDRESS" class="input-control">
        <br>

        <span class="error"><?php echo $error['password'];?></span><br/>
        <input type="password" name="password" placeholder="PASSWORD" class="input-control">
        <br>
        <input type="submit" name="login" class="btn-control">
    </form>
</body>

</html>