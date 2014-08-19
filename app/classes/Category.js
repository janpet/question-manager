function Category(){
	
	this.cid;	
	this.name;
	
	// DROPDOWN LIST
	this.categoriesList = function categoriesList(){ 

		$.ajax({
          url : "model/controller.php",   
          type : "POST", //MORA BIT POST JER ŠALJEŠ
           data:{ actionName:"select_category"},
         dataType: 'text', 
    
	    success : function(data){ 
	    	data = $.parseJSON(data);
	            var html = [];
	            $('#categories-section').html(spinner);
	          html.push('<option value="0">ALL</option>');
	         
	           $.each(data, function(index, d){            
	                html.push(
	                  "<option value =",d.cid,">",d.name,"</option>"                     
	                           );
	            });
	          html.push('<option value="99"> + MANAGE CATEGORIES </option>'); 

	           
	               
	            $("#categories-section").html(html.join(''));
	           

	          }, error: function( req, status, err ) {
           console.log( 'something went wrong', status, err );
             }

	      }); 

		 // success : function(data){ 
              //   $('#mainQuestions').html(spinner);     
              //   $('#mainQuestions').html(data);     

              // }
    }


    // DROPDOWN FILL	
      this.dropdJSON= function dropdJSON(ddSelector)   { 
              /* set no cache */
      $.ajax({
          url : "model/controller.php",   
          type : "POST", //MORA BIT POST JER ŠALJEŠ
           data:{ actionName:"select_category"},
         dataType: 'text', 
    
	    success : function(data){ 
	    	data = $.parseJSON(data);
            var sel = [];
          
       //   sel.push('<select class ="selId">')
            /* loop through array */
            $.each(data, function(index, d){            
                sel.push(
                  "<option value =",d.cid,">",d.name,"</option>"                     
                           );
            });
     // sel.push('</select>') 
          
               
            $(ddSelector).html(sel.join(''));              

          }, error: function( req, status, err ) {
           console.log( 'something went wrong', status, err );
             }
  
       }); 
  }

       // SELECT FROM CATEGORY
       this.listselectCategory = function listselectCategory(calistId)   { 
        /* set no cache */
         $.ajax({
          url : "model/controller.php",   
          type : "POST", //MORA BIT POST JER ŠALJEŠ
           data:{ actionName:"select_question"}, //Pozivamo pitanja
         dataType: 'text', 
             beforeSend: function() {
              $('#mainQuestions').html(spinner);
                }, 
    
	    success : function(data){ 	    	

	    	data = $.parseJSON(data); 	    	
            var html = [];
            $('#mainQuestions').html(spinner);                     
        	
            /* loop through array */

            $.each(data, function(index, d){  

              if(d.cid==calistId){         
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

              }  

            });
   

              $('#mainQuestions').html(spinner);
               
            $("#mainQuestions").html(html.join(''));
              
                     showUnanswered();
               if($('#mainQuestions').html()==""){
               	 $("#mainQuestions").html("There are no questions for this category");
               }

           }, error: function( req, status, err ) {
           console.log( 'something went wrong', status, err );
             }
  
       }); 
  }

      	 // NEW CATEGORY
		 this.newCategory = function newCategory(ctname){

				 $.ajaxSetup({ cache: false });
				$('#categories-section').html(spinner);

				  $. ajax ({
				        type: "POST", // HTTP method POST or GET
				            url: "model/controller.php", //Where to make Ajax calls
				            dataType:"text", // Data type, HTML, json etc.
				            data:{cname: ctname, actionName:"insert_category"},    //post variables
				            
				            beforeSend: function() {
				              $('#mainQuestions').html(spinner);
				                },   
				                 success: function (data) {                 

				                 
				            $('#mainQuestions').html(data);
				              //  location.reload(); 				                            
				                 clearForm("#newCategory");
				            	 var question=new Question();
				            	 question.getQuestions();
				            	 var category=new Category();
						  		category.categoriesList();
						  		var category=new Category();
								  category.dropdJSON("#editCat");
						  	category.dropdJSON(".insertCat");

				             },
				             error: function( req, status, err ) {
				            console.log( 'something went wrong', status, err );
				              }
				                  });




				 }


		this.delCategory = function delCategory(ctid){

			 $.ajaxSetup({ cache: false });
			 $('#categories-section').html(spinner);

			  $. ajax ({
			        type: "POST", // HTTP method POST or GET
			            url: "model/controller.php", //Where to make Ajax calls
			            dataType:"text", // Data type, HTML, json etc.
			            data:{catdelid:ctid,actionName:"delete_category"},    //post variables
			            
			            beforeSend: function() {
			              $('#mainQuestions').html(spinner);
			                },   
			                 success: function (data) {   
			                 alert(data);   
			        clearForm("#newCategory");
				  	 var question=new Question();
				  	 question.getQuestions();
				  	 var category=new Category();
				 	category.categoriesList();
				 	var category=new Category();
					  category.dropdJSON("#editCat");
				 category.dropdJSON(".insertCat");  
				    
			   // $('#mainQuestions').html(data);    

			           
			             },
			             error: function( req, status, err ) {
			            console.log( 'something went wrong', status, err );
			              }
			                  });
			 }		


			 //EDIT CATEGORY
		this.editCategory = function editCategory(cteid,ctename){
					//alert(cteid+ ""+ ctename);
					 $.ajaxSetup({ cache: false });
					$('#categories-section').html(spinner);

					  $. ajax ({
					        type: "POST", // HTTP method POST or GET
					            url: "model/controller.php", //Where to make Ajax calls
					            dataType:"text", // Data type, HTML, json etc.
					            data:{cateId:cteid, cateName:ctename, actionName:"update_category"},    //post variables   //post variables
					            
					            beforeSend: function() {
					              $('#mainQuestions').html(spinner);
					                },   
					                 success: function (data) {               

					                 
					        //    $('#mainQuestions').html(data);

					 		  
				            	 question.getQuestions();
								  var category=new Category();
								  category.categoriesList();
								  category.dropdJSON("#editCat");
								 category.dropdJSON(".insertCat");
					                 
					                            
					                 
					           
					             },
					             error: function( req, status, err ) {
					            console.log( 'something went wrong', status, err );
					              }
		                  });




 }	 





}// END CLASS


