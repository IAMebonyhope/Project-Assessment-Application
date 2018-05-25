<?php
require_once 'php/Database.php';

class Grade{
 
    // database connection and table name
    private static $conn;
    private static $table_name = "grades";
    private static $initialized;

 
    private static function initialize()
    {
       
        self::$conn = Database::getConnect();
        self::$initialized = true;

         if (self::$initialized)
            return;
    }
 
    
    //read the data where $id = id of the row
    public static function find($id){
        self::initialize();

        //select all data
        $query = "SELECT * FROM " . self::$table_name. " WHERE id = :id";  
        $stmt = self::$conn->prepare( $query );

        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $grades = $stmt->fetchAll();

        if(($grades != null) && (is_array($grades))){
            
            if($grades[1] == null){
                return $grades[0];
            }
            else{
                return $grades;
            }
        }
        else{
            return "record not found";
        }
        
    }


    //read data from the data based on where conditions
    //e.g read([
    //  ["name", "=", "bola"],
    //  ["age", "<", "20"]
    //])
    //means SELECT * where name = bola AND age < 20
    public static function read($arrs=null){
        self::initialize();

        $query = "SELECT * FROM " . self::$table_name;

        if($arrs != null){
            $query .= " WHERE";
            foreach($arrs[0] as $x){
                $query .= " " . $x;
            }

            if(count($arrs) > 1){
                for($i = 1; $i < count($arrs); $i++){
                    $query .= "  AND";
                    foreach($arrs[$i] as $x){
                        $query .= " " . $x;
                    }    
                }
            }
        }
        
       
        try{
            $stmt = self::$conn->prepare( $query );
            $stmt->execute();
            $grades = $stmt->fetchAll();
            
            if(($grades != null) && (is_array($grades))){
                
                if($grades[1] == null){
                    return $grades[0];
                }
                else{
                    return $grades;
                }
            }
            else{
                return "record not found";
            }
        }
        catch(PDOEception $e){
			//echo $e->getMessage();
        }
    }


    //creates an new record in the table
    //pass in an associative array where the keys are the tbl column names and the values are the data to be created
    public static function create($arr){
        self::initialize();

        $query = "INSERT INTO " . self::$table_name. " (name, abstract, litReview, methodology, analysis, conclusion, adminId) VALUES (:name, :abstract, :litReview, :methodology, :analysis, :conclusion, :adminId)";  
        $stmt = self::$conn->prepare( $query );

        if($stmt->execute($arrs)){
            return true;
        }
        else{
            return false;
        }
    }


    //pass in associative array of all details and id of record to be updated
    public static function update($arrs){
        $query = "UPDATE " . $this->table_name. " (name, abstract, litReview, methodology, analysis, conclusion) VALUES (:name, :abstract, :litReview, :methodology, :analysis, :conclusion) WHERE id = :id";  
        $stmt = $this->conn->prepare( $query );

        //$stmt->bindParam(':id', $arrs['id']);

        if($stmt->execute($arrs)){
            return true;
        }
        else{
            return false;
        }
    }

    //delete the record from the table
    function delete(){
 
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";    
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $id);
        $result = $stmt->execute();

        if(($result != null) && (is_array($result))){
            return true;
        }else{
            return false;
        }
    }
 
}
?>