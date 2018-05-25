<?php
require_once('php/objects/Admin.php');
require_once('php/objects/Student.php');
require_once('php/objects/Project.php');
require_once('php/objects/Examiner.php');
require_once('php/objects/Grade.php');
require_once('php/objects/Project_Examiner.php');

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

    public $loginError = false;


    public function login($email, $password){
    
        if(($email == "") || ($password == "")){
            $error['general'] = "email and password cannot be empty";
            $this->loginError = true;
            return $error;
        }
        else{
            $email = '"'. $this->test_input($email). '"';
            $password = '"'. $this->test_input($password) . '"';

            $admin = Admin::read([
                    ["email", "=", $email],
                    ["password", "=", $password]
                    ]);
            
            if((!is_array($admin)) || ($admin == null)){
                $error['general'] = "invalid email or password";
                $this->loginError = true;
                return $error;
            }
            else{
                $this->loginError = false;
                return $admin;
            }
        }
        
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
        elseif(filter_var($array['level'], FILTER_SANITIZE_NUMBER_INT) === ""){
            $error['level'] = "level must contain only numbers";
            return $error;
        }
        elseif(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $array['password']) === 0){
            $error['password'] = "password must be more than 8 characters, contain an uppercase letter, lowercase letter and a number";
            return $error;
        }
        else{
            $student = Student::read([
                    ["matricNo", "=", $array['matricNo']],
                    ]);
            
            if(is_array($student)){
                $error['general'] = "student with this Matric No already exists";
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

    }

    public function create_examiner($array){
        
        $error;
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
        elseif(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $array['password']) === 0){
            $error['password'] = "password must be more than 8 characters, contain an uppercase letter, lowercase letter and a number";
            return $error;
        }
        else{
            $examiner = Examiner::read([
                    ["email", "=", $array['email']],
                    ]);
            
            if(is_array($examiner)){
                $error['general'] = "examiner with this email already exists";
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
        elseif(!is_numeric($array['abstract'])){
            $error['abstract'] = "field must be a number";
            return $error;
        }
        elseif(!is_numeric($array['litReview'])){
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
            $grade = Grade::read([
                    ["name", "=", ('"' . $array['name'] . '"')],
                    ]);

            $total = $array['abstract'] + $array['litReview'] + $array['methodology'] + $array['analysis'] + $array['conclusion'];
            
            if($total != 100){
                $error['general'] = "scores of all section must sum up to 100";
                return $error;
            }
            elseif(is_array($grade)){
                $error['general'] = "A grade scale with this name already exist";
                return $error;
            }
            else{
                foreach ($array as $key => $value) {
                    $value = $this->test_input($value);
                }

                foreach ($array as $key => $value) {
                    if(($key !== "name") && ($key !== "adminId")){
                        $arr = array(
                            'A' => ((5/5)*$value),
                            'B' => ((4/5)*$value),
                            'C' => ((3/5)*$value),
                            'D' => ((2/5)*$value),
                            'E' => ((1/5)*$value),
                            'F' => ((0/5)*$value),
                        );
                        $array[$key] = implode(',', $arr);
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
            if(is_array($projects[1])){
                foreach($projects as $project){              
                    $student = Student::find($project['studentId']);
                    $project['studentName'] = $student['lastName'] . " " . $student['firstName'];
                    $project['studentMatricNo'] = $student['matricNo'];

                    $x = Project_Examiner::read([
                        ["projectId", "=", $project['id']],
                        ]);
                    if(is_array($x)){
                        $project['status'] = "assigned";
                        if(is_array($x[0])){
                            $project['examiners'] = " ";
                            foreach($x as $var){
                                $examObj = Examiner::find($var['examinerId']);
                                $project['examiners'] += $examObj["lastName"] . " " . $examObj["firstName"] . "<br>";
                            }

                        }else{
                           $examObj = Examiner::find($x['examinerId']);
                           $project['examiners'] = $examObj["lastName"] . " " . $examObj["firstName"];
                        }
                    }
                    else{
                        $project['status'] = "unassigned";
                    }
                }
            }
            else{
                $student = Student::find($projects['studentId']);
                    $projects['studentName'] = $student['lastName'] . " " . $student['firstName'];
                    $projects['studentMatricNo'] = $student['matricNo'];

                    $x = Project_Examiner::read([
                        ["projectId", "=", $projects['id']],
                        ]);
                    if(is_array($x)){
                        $projects['status'] = "assigned";
                        if(is_array($x[0])){
                            $projects['examiners'] = " ";
                            foreach($x as $var){
                                $examObj = Examiner::find($var['examinerId']);
                                $projects['examiners'] += $examObj["lastName"] . " " . $examObj["firstName"] . "<br>";
                            }

                        }else{
                           $examObj = Examiner::find($x['examinerId']);
                           $projects['examiners'] = $examObj["lastName"] . " " . $examObj["firstName"];
                        }
                    }
                    else{
                        $projects['status'] = "unassigned";
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
            if(is_array($students[1])){
                foreach($students as $student){              
                    $projects = Project::read([
                        ["studentId", "=", $student['id']],
                        ]);
                    $student['projects'] = $projects;
                }
            }
            else{
                $projects = Project::read([
                        ["studentId", "=", $students['id']],
                        ]);
                if(is_array($projects)){
                    $students['projects'] = $projects;
                }
                else{
                    $students['projects'] = null;
                }
            }
            return $students;
        }
        else{
            return "no student found";
        }
    }


    public function view_examiners(){
        $examiners = Examiner::read();

        if(is_array($examiners)){
            if(is_array($examiners[1])){
                foreach($examiners as $examiner){              
                    $projects = Project_Examiner::read([
                        ["examinerId", "=", $examiner['id']],
                        ]);
                    $examiner['projects'] = $projects;
                }
            }
            else{
                $projects = Project_Examiner::read([
                        ["examinerId", "=", $examiners['id']],
                        ]);
                if(is_array($projects)){
                    $examiners['projects'] = $projects;
                }
                else{
                    $examiners['projects'] = null;
                }
            }
            return $examiners;
        }
        else{
            return "no examiner found";
        }
    }

    public function view_grades(){
        $grades = Grade::read();
        if(is_array($grades)){
            if(is_array($grades[1])){
                foreach($grades as $grade){              
                    $grade['abstract'] = (explode(',', $grade['abstract']))[0];
                    $grade['litReview'] = (explode(',', $grade['litReview']))[0];
                    $grade['methodology'] = (explode(',', $grade['methodology']))[0];
                    $grade['analysis'] = (explode(',', $grade['analysis']))[0];
                    $grade['conclusion'] = (explode(',', $grade['conclusion']))[0];
                }
            }
            else{
                $grades['abstract'] = (explode(',', $grades['abstract']))[0];
                $grades['litReview'] = (explode(',', $grades['litReview']))[0];
                $grades['methodology'] = (explode(',', $grades['methodology']))[0];
                $grades['analysis'] = (explode(',', $grades['analysis']))[0];
                $grades['conclusion'] = (explode(',', $grades['conclusion']))[0];
            }

            return $grades;
        }
        else{
            return "no grade found";
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
            elseif($oldPassword !== $admin['password']){
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