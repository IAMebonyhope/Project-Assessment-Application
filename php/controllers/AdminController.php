<?php
require_once('php/objects/Admin.php');
require_once('php/objects/Student.php');
require_once('php/objects/Project.php');

class AdminController{
    //login//
    //create student//
    //create examiner//
    //create grade scheme//
    //view all students//
    //view all examiners//
    //view projects//
    //assign project to one or more examiners
    //change password//


    public function login($email, $password){
    
        if(($email == "") || ($password == "")){
            $error['general'] = "email and password cannot be empty";
            return $error;
        }
        else{
            $email = $this->test_input($email);
            $password = $this->test_input($password);

            $admin = Admin::read([
                    ["email", "=", $email],
                    ["password", "=", $password]
                    ]);
            
            if((!is_array($admin)) || ($admin == null)){
                $error['general'] = "invalid email or password";
                return $error;
            }
            else{
                return $admin;
            }
        }
        
        //var_dump($student['matricNo']);
    }


    public function create_student($array){
        
        $error = array();
        $empty_status = false;

        foreach ($array as $key => $value) {
            if(empty($value)){
                $error[$key] = "field cannot be empty";
                $empty_status = true;
            }
        }

        if($empty_status == true){
            return $error;
        }
        elseif(filter_var($array['firstName'], FILTER_SANITIZE_STRING) === ""){
            $error['firstName'] = "name must contain only letters";
            return $error;
        }
        elseif(filter_var($array['lastName'], FILTER_SANITIZE_STRING) === ""){
            $error['lastName'] = "name must contain only letters";
            return $error;
        }
        elseif(filter_var($array['dept'], FILTER_SANITIZE_STRING) === ""){
            $error['dept'] = "department must contain only letters";
            return $error;
        }
        elseif(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $newPassword) === 0){
            $error['newPassword'] = "password must be more than 8 characters, contain an uppercase letter, lowercase letter and a number";
            return $error;
        }
        else{
            foreach ($array as $key => $value) {
                $value = $this->test_input($value);
            }

            if(Student::create($array) == true){
                return true;
            }
            else{
                return false;
            }
        }

    }

    public function create_examiner($array){
        
        $error = array();
        $empty_status = false;

        foreach ($array as $key => $value) {
            if(empty($value)){
                $error[$key] = "field cannot be empty";
                $empty_status = true;
            }
        }

        if($empty_status == true){
            return $error;
        }
        elseif(filter_var($array['firstName'], FILTER_SANITIZE_STRING) === ""){
            $error['firstName'] = "name must contain only letters";
            return $error;
        }
        elseif(filter_var($array['lastName'], FILTER_SANITIZE_STRING) === ""){
            $error['lastName'] = "name must contain only letters";
            return $error;
        }
        elseif(filter_var($array['dept'], FILTER_SANITIZE_STRING) === ""){
            $error['dept'] = "department must contain only letters";
            return $error;
        }
        elseif(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $newPassword) === 0){
            $error['newPassword'] = "password must be more than 8 characters, contain an uppercase letter, lowercase letter and a number";
            return $error;
        }
        else{
            foreach ($array as $key => $value) {
                $value = $this->test_input($value);
            }

            if(Examiner::create($array) == true){
                return true;
            }
            else{
                return false;
            }
        }

    }

    public function create_grade($array){
        
        $error = array();
        $empty_status = false;

        foreach ($array as $key => $value) {
            if(empty($value)){
                $error[$key] = "field cannot be empty";
                $empty_status = true;
            }
        }

        if($empty_status == true){
            return $error;
        }
        elseif(!filter_var($array['abstract'], FILTER_VALIDATE_INT)){
            $error['abstract'] = "field must be a number";
            return $error;
        }
        elseif(!filter_var($array['litReview'], FILTER_VALIDATE_INT)){
            $error['litReview'] = "field must be a number";
            return $error;
        }
        elseif(!filter_var($array['methodology'], FILTER_VALIDATE_INT)){
            $error['methodology'] = "field must be a number";
            return $error;
        }
        elseif(!filter_var($array['analysis'], FILTER_VALIDATE_INT)){
            $error['analysis'] = "field must be a number";
            return $error;
        }
        elseif(!filter_var($array['conclusion'], FILTER_VALIDATE_INT)){
            $error['conclusion'] = "field must be a number";
            return $error;
        }
        else{
            $total = $array['abstract'] + $array['litReview'] + $array['methodology'] + $array['analysis'] + $array['conclusion'];
            if($total != 100){
                $error['general'] = "scores of all section must sum up to 100";
                return $error;
            }
            else{
                foreach ($array as $key => $value) {
                    $value = $this->test_input($value);
                }

                foreach ($array as $key => $value) {
                    if(($key != 'name') && ($key != 'adminId')){
                        $arr = array(
                            'A' => ((5/5)*$value),
                            'B' => ((4/5)*$value),
                            'C' => ((3/5)*$value),
                            'D' => ((2/5)*$value),
                            'E' => ((1/5)*$value),
                            'F' => ((0/5)*$value),
                        );
                        $value = implode(',', $arr);
                    }
                }

                if(Grade::create($array) == true){
                    return true;
                }
                else{
                    return false;
                }
            }
        }

    }


    public function view_projects(){
        $projects = Project::read();

        if(is_array($projects)){
            foreach($projects as $project){
                $x = Project_Examiner::read([
                    ["projectId", "=", $project['Id']],
                    ]);
                if($x == null){
                    $project['status'] = "unassigned";
                }
                else{
                    if($project['score'] == null){
                        $project['status'] = "assigned";
                    }
                    else{
                        $project['status'] = "graded";
                    }
                }
            }
            return $projects;
        }
        else{
            return "no project found";
        }
    }


    public function view_project($projectId){
        $project = Project::read([
                    ["id", "=", $projectId],
                    ]);

        if(is_array($project)){
            return $project;
        }
        else{
            return "no project found";
        }
    }


    public function view_students(){
        $students = Student::read();

        if(is_array($students)){
            return $students;
        }
        else{
            return "no student found";
        }
    }


    public function view_examiners(){
        $examiners = Examiner::read();

        if(is_array($examiners)){

            return $examiners;
        }
        else{
            return "no examiner found";
        }
    }


    public function change_password($adminId, $oldPassword, $newPassword){
        if(($adminId == "") || ($oldPassword == "") || ($newPassword == "")){
            $error['general'] = "password fields cannot be empty";
            return $error;
        }
        else{
            $oldPassword = $this->test_input($newPassword);
            $newPassword = $this->test_input($oldPassword);

            $admin = Admin::find($adminId);
            
            if((!is_array($admin)) || ($admin == null)){
                $error['general'] = "admin not found";
                return $error;
            }
            elseif($this->validate_password($oldPassword, $admin['password']) == false){
                $error['oldPassword'] = "incorrect password";
                return $error;
            }
            elseif(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $newPassword) === 0){
                $error['newPassword'] = "password must be more than 8 characters, contain an uppercase letter, lowercase letter and a number";
                return $error;
            }
            else{
                $update_admin = array(
                    "id" => $adminId,
                    "firstName" => $admin['firstName'],
                    "lastName" => $admin['lastName'],
                    "dept" => $admin['dept'],
                    "faculty" => $admin['faculty'],
                    "password" => $newPassword,
                );

                if(Admin::update($update_admin) == true){
                    return true;
                }
                
            }
        }
    }


    private function test_input($data) {

		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		
		return $data;
    }

    //val1 = incoming request
    //val2 = database data
    private function validate_password($val1, $val2)
    {

        if (Hash::check($val1, $val2)) {
            return true;
        }
        else{
            return false;
        }
    }
}

?>