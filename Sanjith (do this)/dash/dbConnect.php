<?php  
    class dbConnect {  
        function __construct() {  
            require_once('config.php');  
            $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABSE);  
            if(!$con)// testing the connection  
            {  
                die ("Cannot connect to the database");  
            }   
            return $con;  
        }  
        public function Close(){  
            mysqli_close();  
        }  
    }  
?>