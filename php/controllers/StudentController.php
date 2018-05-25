<?php
require_once('php/objects/Student.php');
require_once('php/objects/Project.php');

class StudentController{
    
    //drafted projects
    public $loginError = false;

    public function login($matricNo, $password){
    
        if(($matricNo == "") || ($password == "")){
            $error['general'] = "matric No and password cannot be empty";
            $this->loginError = true;
            return $error;
        }
        else{
            $matricNo = '"'. $this->test_input($matricNo). '"';
            $password = '"'. $this->test_input($password) . '"';

            $student = Student::read([
                    ["matricNo", "=", $matricNo],
                    ["password", "=", $password]
                    ]);
            
            if((!is_array($student)) || ($student == null)){
                $error['general'] = "invalid matricNo or password";
                $this->loginError = true;
                return $error;
            }
            else{
                $this->loginError = false;
                return $student;
            }
        }
        
        //var_dump($student['matricNo']);
    }


    public function create_project($array){
        
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
        else if(str_word_count($array['abstract']) > 800){
            $error['abstract'] = "abstract must not be more than 800 words";
            return $error;
        }
        else if(str_word_count($array['litReview']) > 800){
            $error['litReview'] = "literature review must not be more than 800 words";
            return $error;
        }
        else if(str_word_count($array['methodology']) > 800){
            $error['methodology'] = "methodology must not be more than 800 words";
            return $error;
        }
        else if(str_word_count($array['analysis']) > 800){
            $error['analysis'] = "analysis must not be more than 800 words";
            return $error;
        }
        else if(str_word_count($array['conclusion']) > 400){
            $error['conclusion'] = "conclusion must not be more than 400 words";
            return $error;
        }
        else{
            $project = Project::read([
                    ["title", "=", ("'" . $array['title'] . "'")],
                    ]);
            
            if(is_array($project)){
                $error['general'] = "project with this title already exists";
                return $error;
            }
            else{
                foreach ($array as $key => $value) {
                    $value = $this->test_input($value);
                }

                if(Project::create($array) == true){
                    return true;
                }
                else{
                    return false;
                }
            }
        }

    }


    public function view_projects($studentId){
        $projects = Project::find($studentId);

        if(is_array($projects)){
            return $projects;
        }
        else{
            return "no project found";
        }
    }


    public function view_project($studentId, $projectId){
        $project = Project::read([
                    ["id", "=", $projectId],
                    ["studentId", "=", $studentId]
                    ]);

        if(is_array($project)){
            return $project;
        }
        else{
            return "no project found";
        }
    }


    public function change_password($studentId, $oldPassword, $newPassword){
        if(($studentId == "") || ($oldPassword == "") || ($newPassword == "")){
            $error['general'] = "password fields cannot be empty";
            return $error;
        }
        else{
            $newPassword = $this->test_input($newPassword);
            $oldPassword = $this->test_input($oldPassword);

            $student = Student::find($studentId);
            
            if((!is_array($student)) || ($student == null)){
                $error['general'] = "student not found";
                return $error;
            }
            elseif($this->validate_password($oldPassword, $student['password']) == false){
                $error['oldPassword'] = "incorrect password";
                return $error;
            }
            elseif(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $newPassword) === 0){
                $error['newPassword'] = "password must be more than 8 characters, contain an uppercase letter, lowercase letter and a number";
                return $error;
            }
            else{
                $update_student = array(
                    "id" => $studentId,
                    "firstName" => $student['firstName'],
                    "lastName" => $student['lastName'],
                    "dept" => $student['dept'],
                    "level" => $student['level'],
                    "faculty" => $student['faculty'],
                    "password" => bcrypt($newPassword),
                );

                if(Student::update($update_student) == true){
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