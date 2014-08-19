<?php 


class Question{

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

	public function getQuestions(){
		 $STH = $this->pdo->query('SELECT * FROM questions,categories WHERE questions.cid=categories.cid ORDER BY qid DESC;');
 		# setting the fetch mode
		$STH->setFetchMode(PDO::FETCH_ASSOC); 	
		$outputdata = array();
		while($row = $STH->fetch()) {
		 								 
			 $outputdata[] = $row;		
		}
		echo json_encode($outputdata);
	}


		public function searchQuestion($search_val){
			//echo $search_val;
		 $STH = $this->pdo->query("SELECT * FROM questions,categories WHERE questions.cid=categories.cid AND question LIKE '%$search_val%' ORDER BY qid DESC ");
 		# setting the fetch mode
		$STH->setFetchMode(PDO::FETCH_ASSOC); 	
		$outputdata = array();
		while($row = $STH->fetch()) {
		 								 
			 $outputdata[] = $row;		
		}
		echo json_encode($outputdata);
	}


	public function insertQuestion($question,$answer,$cid){
	
	$date=date("Y-m-d H:i:s");
	 $STH = $this->pdo->prepare("INSERT INTO questions (question, answer, time,cid) VALUES('$question','$answer','$date','$cid' ) ");

	 $STH->execute();
	}

	public function deleteQuestion($delId){	

	 $STH = $this->pdo->prepare("DELETE FROM questions WHERE qid = '$delId' ");

	 $STH->execute();


	}



	public function updateQuestion($id, $quest, $answer, $cid){

	$STH = $this->pdo->prepare("UPDATE questions SET question='$quest',  answer='$answer', cid ='$cid' WHERE qid='$id' ");

	$STH->execute();	


	}



}




 ?>