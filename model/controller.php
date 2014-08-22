<?php 

require_once('config.php');
require_once('classes/Question.php');
require_once('classes/Category.php');


//IF AJAX WAS SENT

if(!isset($_POST['actionName'])) {	
	print json_encode(0);
	return;

}

else{

$action = $_POST['actionName'];


	//VARIOUS ACTIONS BASED ON THE TEXT THAT WAS SENT
	switch ($action) {


			/* -------------- DISPLAY QUESTIONS FROM DATABASE --------------*/

			case 'select_question':
		  	$question=new Question();		  
		  	$question->getQuestions();		  
			break;	


			/* -------------- SEARCH QUESTIONS  --------------*/
		
			case 'search_question':
			$searchVal=$_POST['searchVal'];			
		 	$question=new Question();		  
		 	$question->searchQuestion($searchVal);		  
			break;	


			/* -------------- DELETE QUESTION --------------*/

			case 'delete_question':
			$id=$_POST["id"];				
		 	$question=new Question();		  
		 	$question->deleteQuestion($id);		  
			break;	


			/* -------------- INSERT QUESTION --------------*/

			case 'insert_question':
			$quest=$_POST["question"];
			$answer=$_POST["answer"];
			$cid=$_POST["cid"];	
			//echo $quest."<br/>".$answer."<br/>".$cid;
		 	$question=new Question();		  
		 	$question->insertQuestion($quest,$answer,$cid);		  
			break;	


			/* -------------- UPDATE QUESTION --------------*/

			case 'update_question':
			$qid=$_POST["id"];
			$quest=$_POST["question"];
			$answer=$_POST["answer"];
			$cid=$_POST["cid"];	
		//echo $qid."<br/>".$quest."<br/>".$answer."<br/>".$cid;	
		 	$question=new Question();		  
		 	$question->updateQuestion($qid,$quest,$answer,$cid);		  
			break;	


		
			/* -------------- LIST CATEGORIES --------------*/

			case 'select_category':		
		    $category=new Category();		  
		    $category-> getCategories();		  
			break;	

			/* -------------- DELETE CATEGORY --------------*/

			case 'delete_category':	
			$cdelid=$_POST["catdelid"];	
		    $category=new Category();	
            $count=$category->count_questionsinCategory($cdelid);
        	
			
			if($count==0){
			
			$category->deleteCategory($cdelid);
			echo "Category was deleted";
			}  else  {
			echo "You have to delete all questions from the category!";

			}
			break;	


			/* -------------- INSERT NEW CATEGORY --------------*/

			case 'insert_category':		
			$name=$_POST["cname"];
		    $category=new Category();		  
		    $category->insertCategory($name);		  
			break;	


			/* -------------- UPDATE CATEGORY --------------*/

			case 'update_category':	
			$ctneid=$_POST["cateId"];
			$ctnename=$_POST["cateName"];
		//echo $ctneid."<br/>".$ctnename;	
		  $category=new Category();		  
		  $category-> updateCategory($ctneid,$ctnename);		  
			break;	


		
		default:
		
	   echo "This action does not exist";
		
		break;
	}

}



 ?>