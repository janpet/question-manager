function Question(){

this.qid;	
this.cid;	
this.question;
this.answer;
this.srchVal;


  //GET QUESTIONS FROM DATABASE
this.getQuestions =function getQuestions(){
    $.ajaxSetup({ cache: false });
  $('#mainQuestions').html(spinner);

   $.ajax({
        url : "model/controller.php",   
          type : "POST", //MORA BIT POST JER ŠALJEŠ
           data:{ actionName:"select_question"},
         dataType: 'text',      

      success : function(data){ 
        data = $.parseJSON(data);
              var html = [];
              $('#mainQuestions').html(spinner);             
              $.each(data, function(index, d){            
                  html.push(
                        "<div class='question-item'>",
                         "<div class = 'qitems-left'>",
                           "<p class ='qlist-category'> Category: ", d.name,"</p> ",
                           "<p class ='qlist-time'>", d.time,"</p>",
                            "<span class='qlist-id'>",d.qid,"</span>",
                            "<span class ='qlist-catid'>", d.cid,"</span> ",
                         "</div>",                         
                         "<div class = 'qitems-right'>",
                         "<p class='qlist-edit'><button class='question-edit light-button button-size1'>Edit</button></p>",
                         "</div>",
                         "<div class = 'clearfix'></div>",
                         "<p class='qlist-question'><a href ='#'>",d.question,"</a></p> ",
                         "<p class ='qlist-answer'>",d.answer,"</p> ",
                         "<br/><p class ='niceBorder'></p><br/><br/>",

                      "</div>"              
                             );
              });     

               $('#mainQuestions').html(spinner); 

              $('#mainQuestions').html(html.join(''));    
         
            },
              error: function( req, status, err ) {
           console.log( 'something went wrong', status, err );
             }

              // success : function(data){ 
              //   $('#mainQuestions').html(spinner);     
              //   $('#mainQuestions').html(data);     

              // }
             
      });


          
  }


  //SEARCH QUESTION
    this.searchTerm= function searchTerm(srchVal)
      {  

           $. ajax ({
             type: "POST",
             dataType: 'text',
             url: "model/controller.php",
             data:{ actionName:"search_question", searchVal:srchVal},  //post variables
                beforeSend: function() {
              $('#mainQuestions').html(spinner);
                }, 
             success: function (data) {
              


           var output = [];
              data = $.parseJSON(data);       
              $('#mainQuestions').html(spinner); 
           $.each(data, function(index, d){
               // output += '<p><a href="#">' + val.qid + '</a></p>';
                 output.push(
            
                            "<div class='question-item'>",
                         "<div class = 'qitems-left'>",
                           "<p class ='qlist-category'> Category: ", d.name,"</p> ",
                           "<p class ='qlist-time'>", d.time,"</p>",
                            "<span class='qlist-id'>",d.qid,"</span>",
                            "<span class ='qlist-catid'>", d.cid,"</span> ",
                         "</div>",                         
                         "<div class = 'qitems-right'>",
                         "<p class='qlist-edit'><button class='question-edit light-button button-size1'>Edit</button></p>",
                         "</div>",
                         "<div class = 'clearfix'></div>",
                         "<p class='qlist-question'><a href ='#'>",d.question,"</a></p> ",
                         "<p class ='qlist-answer'>",d.answer,"</p> ",
                         "<br/><p class ='niceBorder'></p><br/><br/>",

                      "</div>"
                           );  


           });
 

       $("#mainQuestions").html(output.join('')); 
       showUnanswered();
        

             },
             error: function( req, status, err ) {
            console.log( 'something went wrong', status, err );
              }

              //  success : function(data){ 
              //   $('#mainQuestions').html(spinner);     
              //   $('#mainQuestions').html(data);     

              // }


         });

      }




      //UPDATE THE QUESTION
     	this.updateQuestion=function updateQuestion(aId,aQuestion,aAnswer,aCid){

       // alert(aId+aQuestion+aAnswer+aCid);

    $.ajaxSetup({ cache: false });

	 $. ajax ({
         type: "POST",
             dataType: 'text',
             url: "model/controller.php",
             data: {id: aId, question: aQuestion, answer: aAnswer, cid:aCid, actionName:"update_question"},
          
           success: function (data) {
       
   

                $('#mainQuestions').html(data);//iterate here the object


           // location.reload();    
        
                  
            var currentcatvalue = $( "select#categories-section option:selected" ).val();                
            category.listselectCategory(currentcatvalue); 
       

           },
           error: function( req, status, err ) {
          console.log( 'something went wrong', status, err );
            }
       });
  



	}



	//DELETE THE QUESTION
this.delQuestion=function delQuestion(delId){
 // alert(delId);
    $. ajax ({
             type: "POST",
             dataType: 'text',
             url: "model/controller.php",
             data: {id: delId, actionName:"delete_question"},
             success: function (data) {
               //   $('#mainQuestions').html(data);//iterate here the object
                var currentcatvalue = $( "select#categories-section option:selected" ).val();               
                category.listselectCategory(currentcatvalue); 
             },
             error: function( req, status, err ) {
            console.log( 'something went wrong', status, err );
              }
         });
     

     // Other way
     // $.post("model/deleteUser.php", { id: delId })
      //   .done(function(data) {
      //     // you can see your console to verify if record was deleted
      //     $('#result2').html(data);

	}

// INSERT NEW QUESTION
	this.insertQuestion=function insertQuestion(inquestion,inanswer,incid)
	{	

		  $. ajax ({
		        type: "POST", // HTTP method POST or GET
            url: "model/controller.php", //Where to make Ajax calls
            dataType:"text", // Data type, HTML, json etc.
            data:{question:inquestion,answer:inanswer, cid:incid, actionName:"insert_question"},    //post variables
            
            beforeSend: function() {
              $('#mainQuestions').html(spinner);
                },   
                 success: function (data) {                 
                    $('#mainQuestions').html(spinner);     
               //  $('#mainQuestions').html(data);     
                            
        //  location.reload();
              	 question.getQuestions();
                   var category=new Category();
                  category.categoriesList();
                 
                 
           
             },
             error: function( req, status, err ) {
              $('#mainQuestions').html(data);   
            console.log( 'something went wrong', status, err );
              }



   		  }); 


		}
	

}
