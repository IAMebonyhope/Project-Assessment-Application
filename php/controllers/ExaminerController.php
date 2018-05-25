<?php
require_once('php/objects/Examiner.php');
require_once('php/objects/Project.php');
require_once('php/objects/Grade.php');
require_once('php/objects/Project_Examiner.php');

class ExaminerController{
    
    //drafted projects
    public $loginError = false;

    public function login($email, $password){
    
        if(($email == "") || ($password == "")){
            $error['general'] = "email No and password cannot be empty";
            $this->loginError = true;
            return $error;
        }
        else{
            $email = '"'. $this->test_input($email). '"';
            $password = '"'. $this->test_input($password) . '"';

            $examiner = Examiner::read([
                    ["email", "=", $email],
                    ["password", "=", $password]
                    ]);
            
            if((!is_array($examiner)) || ($examiner == null)){
                $error['general'] = "invalid matricNo or password";
                $this->loginError = true;
                return $error;
            }
            else{
                $this->loginError = false;
                return $examiner;
            }
        }
        
        //var_dump($student['matricNo']);
    }


    public function view_projects($examinerId){
        $assigns = Project_Examiner::read([
                    ["examinerId", "=", $examinerId]
                    ]);
        $projects = [];
        if(is_array($assigns)){
            if(is_array($assigns[1])){
                foreach($assigns as $assign){
                    $project = Project::find($assign['projectId']);
                    if(is_array($project)){
                        if($project['score'] == null){
                            $project['graded'] = false;
                        }
                        else{
                            $project['graded'] = true;
                        }
                        array_push($projects, $project);
                    }
                }
            }
            else{
                $project = Project::find($assigns['projectId']);
                if(is_array($project)){
                    if($project['score'] == null){
                            $project['graded'] = false;
                    }
                    else{
                            $project['graded'] = true;
                    }
                    array_push($projects, $project);
                }
            }
            return $projects;
        }
        else{
            return "no project found";
        }
    }


    public function view_project($examinerId, $projectId){
        $project = Project_Examiner::read([
                    ["projectId", "=", $projectId],
                    ["examinerId", "=", $examinerId]
                    ]);

        if(is_array($project)){
            $proj = Project::find($project['projectId']);
            return $proj;
        }
        else{
            return "no project found";
        }
    }


    public function grade_project($array){
        
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
        else{
            $score = 0;
            $grade = [];
            $val = array(
                "A" => 0,
                "B" => 1,
                "C" => 2,
                "D" => 3,
                "E" => 4,
                "F" => 5
            );

            $gradeId = Project_Examiner::read([
                    ["projectId", "=", $array['projectId']]
                    ]);
            if(is_array($gradeId)){
                $grade = Grade::find($gradeId['gradeId']);
            }
            foreach ($array as $key => $value) {                      
                    if($key !== "projectId"){
                        $gra = explode(',', $grade[$key]);
                        $x = $gra[$val[$value]];
                        $score += $x;
                        
                    }
            }

            $project = Project::update($score, $array['projectId']);


            return $project;

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