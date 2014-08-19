
//VARS AND FUNCTIONS
var spinner ="<img src='img/ajax-loader.gif'>"; // Spinner ajax effect
var clearForm=function(formID){ $(formID).val(""); } // To clear form after function


//List questions

var question=new Question();
question.getQuestions();




//List categories
var category=new Category();
category.categoriesList();


//MOBILE MENU
$(document).on('click', '#nav-menu-trigger', function(){ 
  



 $('.mobile-menu').slideToggle();



   });




//CATEGORIES
$('#categories-section').change(function(){
    var selectvalue = $(this).val(); 

    	if(selectvalue=='0'){
    		question.getQuestions();
    	}


      //CATEGORIES MANAGER
      else if (selectvalue=='99')
      {

          $('#newcatModal').modal('show');

                  // Fill edit textbox with selected category
                   $('#editCategory').val( $('#newcatModal select.insertCat option:selected').text());    

                  $('#newcatModal select.insertCat').change(function(){                  
                    var ecat =  $('#newcatModal select.insertCat option:selected').text();                 

                   $('#editCategory').val(ecat); 


                  });              



                 $('#categories-section').val('0'); 
      }

    	else{

         var category = new Category();        
    		category.listselectCategory(selectvalue); 


    	}

      var currentcatvalue = $( "select#categories-section option:selected" ).text();      
      $('#chosenCat').text(currentcatvalue);

     
     

   

});



                 //NEW CATEGORY
                 $(document).on('click', '#newcatOk', function(){          

                  
                  if($("#newCategory").val()==""){

                    alert('Write something!');
                  }

                  else
                  {
                    var catName = $("#newCategory").val(); 

                    var category = new Category();
                    category.name=catName;   

                    category.newCategory(category.name);                 

                  }
                    
              
                    $('#checkModal').modal('hide');
                    $('#newcatModal').modal('hide');
                });  


                    //DELETE CATEGORY
                 $(document).on('click', '#deletecatOk', function(){

                var r =  confirm("In order to delete a category you must first delete all questions from this category!");
                if (r == true) {
                   var delcid =  $('#newcatModal select.insertCat option:selected').val(); 
                  var category = new Category();
                  category.delCategory(delcid);
                   $('#newcatModal').modal('hide');
                } else {
                 
                }
                 
                

                
                  });



                  //EDIT CATEGORY
                  $(document).on('click', '#editcatOk', function(){

                   var edcid =  $('#newcatModal select.insertCat option:selected').val(); 
                    var ecat =   $('#editCategory').val();    
                  
                     var category = new Category();
                     category.cid=edcid;
                     category.name=ecat;
                     category.editCategory(category.cid,category.name);

                       $('#newcatModal').modal('hide');

                  });



// Current category



// ANSWERED/UNANSWERED 


function showUnanswered(){

               $('qlist_item').removeClass("hideq");
               $(".qlist-answer").each(function () {
               if (!$(this).text().trim().length) {
                   $(this).parent().find(".qlist-question a").addClass("noanswer");

               }
               else {
                   $(this).parent().removeClass("noanswer");

               }

           });


       
     }


    $('#allQ').click(function () {

        $('#allQ').addClass("questionsselect");
        $('#unansweredq').removeClass("questionsselect");
        $('#answeredq').removeClass("questionsselect");
		$('#ansStatus').text("All questions");
     
        $(".qlist-answer").each(function () {
            $(this).parent().removeClass("hideq");
        });



    });




    $('#answeredq').click(function () {

        $('#allQ').removeClass("questionsselect");
        $('#unansweredq').removeClass("questionsselect");
        $('#answeredq').addClass("questionsselect");
		$('#ansStatus').text("Answered");
        $('.question-item').removeClass("hideq");
        $(".qlist-answer").each(function () {
            if (!$(this).text().trim().length) {
                $(this).parent().addClass("hideq");
            }
            else {

                $(this).parent().removeClass("hideq");


            }
        });



    });


        $('#unansweredq').click(function () {

        $('#allQ').removeClass("questionsselect");
        $('#unansweredq').addClass("questionsselect");
        $('#answeredq').removeClass("questionsselect");
        $('#ansStatus').text("Unanswered");

        $('qlist_item').removeClass("hideq");
        $(".qlist-answer").each(function () {
            if ($(this).text().trim().length) {
                $(this).parent().addClass("hideq");

            }
            else {


                $(this).parent().removeClass("hideq");




            }

        });



    });

var category=new Category();
$('#insertModal #editmodal-body select').html(category.dropdJSON("#editCat"));
$('#insertModal #newmodal-body select').html(category.dropdJSON(".insertCat"));
$('.select-part select').val('0');


	



// SEARCH
 $(document).on('click', '#searchBtn', function(){ 
       	event.preventDefault(); //OVO JE BITNO DA TI NE POKRENE NIS NA SERVERU  
       var searchvalue="";
        var searchvalue = $('#searchId').val();  
        question.searchTerm(searchvalue);
   });

// SEARCH -MOBILE FORM
  $(document).on('click', '#searchBtn-mob', function(){ 
        event.preventDefault(); //OVO JE BITNO DA TI NE POKRENE NIS NA SERVERU
         var searchvalue="";
       var searchvalue = $('#searchId-mob').val();
        question.searchTerm(searchvalue);
   });





//EDIT QUESTION
  $(document).on('click', '.question-edit', function(){     
  
    // get the id
    $('#editModal').modal('show');

     var id = $(this).parent().parent().parent().find('.qlist-id').text();  
     var question = $(this).parent().parent().parent().find('.qlist-question').text();  
     var answer = $(this).parent().parent().parent().find('.qlist-answer').text();      
     var cid =$(this).parent().parent().parent().find('.qlist-catid').text();   

     // Mora bit 'val()' jer inace ti sve pomijesa
   $('#editId').val(id);
   $('#editQuestion').val(question);
   $('#editAnswer').val(answer);
   $('#editCat').val(cid); 

  

    

    });

   $(document).on('click', '#editCancel', function(){        
    
        $('#editModal').modal('hide');   
     

        });
     

  //IF Delete  
 $(document).on('click', '#qDelete', function(){
    var delId = $('#editmodal-body #editId').val();        
    $('#checkModal').modal('show');
    $('#checkModal #checkId').html(delId);             

                

          }); 
 
  //IF No DELETE
           $(document).on('click', '#cformCancel', function(){    
            $('#checkModal').modal('hide');

           });


    //IF Yes DELETE 
      $(document).on('click', '#cformOk', function(){          
       var delId=$('#checkModal #checkId').text();  
       var question=new Question();
         question.delQuestion(delId);
             $('#checkModal').modal('hide');
     });          


     //Update Question 
      $(document).on('click', '#editOk', function(){
    
     var aId =$('#editId').val();
     var aQuestion= $('#editQuestion').val();
     var aAnswer= $('#editAnswer').val();
     var aCid= $('#editCat').val();          
 
  //  alert(aId+aQuestion+aAnswer+aCid);
    var question=new Question();
    question.updateQuestion(aId,aQuestion,aAnswer,aCid);
     var aId ="";
     var aQuestion="";
     var aAnswer="";
      var aCid="";

         $('#editModal').modal('hide');

        });   



// NEW QUESTION CLICK
$(document).on('click', '#newqBtn', function(){ 

  	$('#insertModal').modal('show'); 
    $("#insertQuestion").val("");
    $("#insertAnswer").val(""); 
    $("#insertModal .insertCat").val("");   

  });

// INSERT QUESTION
$(document).on('click', '#insertOk', function(){ 


    var inquestion =$("#insertQuestion").val();
    var inanswer =$("#insertAnswer").val();       
    var incid =$("#insertModal .insertCat").val();    


    if((inquestion=="")||(inanswer=="")||(incid=="")){
      alert("you need to fill all fields!");
    }

    else
    {
    var question=new Question();
    question.insertQuestion(inquestion,inanswer,incid);
    var inquestion ="";
    var inanswer ="";       
    var incid ="";  
    $('#insertModal').modal('hide');
    }         
   
                  
}); 






//Open Question

$(document).on('click' , '.qlist-question a', function(){
event.preventDefault();
 
	 $(this).parent().parent().find('.qlist-answer').slideToggle();

});
 










// scroll to top
 $(window).scroll(function () {
        var aTop = 300;
        if ($(this).scrollTop() >= aTop) {
            $('.scTop').fadeIn();
        }
        else {
            $('.scTop').fadeOut();

        }

    });


// scroll to top animation
   $("#toTop").click(function () {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
    });


$('#modalAbout, #modalAbout-mob').click(function(){

  $('.jan-modal-bg').fadeIn();
    $('#jmodal-help').fadeIn();

});


$('#modalHelp, #modalHelp-mob').click(function(){

  $('.jan-modal-bg').fadeIn();
    $('#jmodal-about').fadeIn();

});

$('.janmodal-close').click(function(){

    $('.jan-modal-bg').fadeOut();
    $('.jan-modal-container').fadeOut();
});


 











