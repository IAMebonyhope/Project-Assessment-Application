<?php
    include_once('php/controllers/StudentController.php');

  
    $stCtrl = new StudentController;

    $result = $stCtrl->login('456778', 'password');

    if($result['matricNo'] == '140805039'){
        var_dump($result);
    }
    else{
        var_dump($result);
    }
    

   ?>