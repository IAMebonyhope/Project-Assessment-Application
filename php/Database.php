<?php

class Database{
	
	

	public static function getConnect(){

        $host = 'localhost';
       $db_name = 'project_assessment';
       $username = 'root';
       $password = '';

        $dbh;
		// Create new PDO
		try {
            $dbh = new PDO("mysql:host=$host; dbname=$db_name", $username, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOEception $e){
			$error = $e->getMessage();
        }
        
        return $dbh;
    }
    
}


	

?>