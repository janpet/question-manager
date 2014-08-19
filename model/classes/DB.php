<?php 

class DB{


   protected  $host      = DB_HOST;
   protected  $user      = DB_USER;
   protected  $pass      = DB_PASS;
   protected  $dbname    = DB_NAME;
 
   protected $dbh;
   protected $stmt;
 
 

    public function __construct(){
     
        // Set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        // Set options
        $options = array(
            PDO::ATTR_PERSISTENT    => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
        );  


           // Create a new PDO instanace
        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
           // echo "uspjelo";
        }
        // Catch any errors
        catch(PDOException $e){
            $this->error = $e->getMessage();
        }


    }




	
}


 ?>