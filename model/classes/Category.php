<?php 


Class Category{

private $host,
 $user,
 $pass,
 $dbname;

public $pdo;
public $stmt;	

private $_qid,
 $_question,
 $_answer,
 $_date,
 $_cid;

   public function __construct(){

    $host=DB_HOST;
    $dbname=DB_NAME;
    $user=DB_USER;
    $pass=DB_PASS;
    $this->pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $this->pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


   } 


   public function getCategories(){


   	 $STH = $this->pdo->query('SELECT * FROM categories');
   	 	# setting the fetch mode
		$STH->setFetchMode(PDO::FETCH_ASSOC); 	
		$outputdata = array();
		while($row = $STH->fetch()) {
		 								 
			 $outputdata[] = $row;		
		}
		echo json_encode($outputdata);

   }


public function insertCategory($name){

   	 $STH = $this->pdo->prepare("INSERT INTO categories(name) VALUES('$name')");
   	 $STH->execute(); 	

   }


public function count_questionsinCategory($cdelid){
   $sql="SELECT count(*) FROM questions WHERE cid = '$cdelid' ";
   $STH = $this->pdo->query($sql);
   $row = $STH->fetch(PDO::FETCH_NUM);
  return $row[0];
   }   

public function deleteCategory($cdlid){
 // echo "uspjeh!";

   	 $STH = $this->pdo->prepare("DELETE FROM categories WHERE cid='$cdlid'");
   	 $STH->execute(); 	

   }


public function updateCategory($ceid, $cename){

  	 $STH = $this->pdo->prepare("UPDATE categories SET name='$cename',  cid ='$ceid' WHERE cid='$ceid'");
  	 $STH->execute();

   }



}



 ?>