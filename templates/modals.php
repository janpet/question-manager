
    <div class="jan-modal-bg"></div>

    
      <!-- MODAL ABOUT-->
    <div class="jan-modal-wrapper">


       <div class="jan-modal-container"  id="jmodal-about">

         <div class="jmodal-top"><a href="#"  class="modalCloseImg janmodal-close"></a></div>

         <div class="jmodal-content">
             
          
          <h1>About</h1>

         <br/>  
          <p class="jmodal-text text-center">
     

         This is the simple practice app for managing questions and answers. It uses JQuery, Ajax, PHP and Bootstrap for UI. <br/> <br/> App is free it and you can use it anyway you like.
              <br/>   <br/>Author : <a href="mailto:janko2p@gmail.com">Janko Prester</a>
                <br/>Web Site : <a href="http://www.jankoprester.com">Janko Prester Portfolio</a>
               <br/>   <br/> Find it on Github.com <br/><br/> 
               <a href="https://github.com/janpet/question-manager"><img src="img/blacktocat.png" width="55" height="55"></a>        


         </p>

         </div>

       
      </div>

    </div>



  <!-- MODAL HELP-->

   <div class="jan-modal-bg">  </div>
 
    <div class="jan-modal-wrapper">


       <div class="jan-modal-container"  id="jmodal-help">

         <div class="jmodal-top"><a href="#"  class="modalCloseImg janmodal-close"></a></div>

         <div class="jmodal-content">
             
          
          <h1>Help</h1>
            <br />
          <br />

         <strong> SEARCH :</strong>  Search question by the keyword. If you leave the field empty it will search all questions.
          <br /><br />
           <strong> NEW QUESTION :</strong>  Inserts new question. Choose category, write question and answer. You are not requied to write answer immediately, you can do it later. Until then, question will remain unanswered.
            <br /><br />
            <strong> SELECT CATEGORY : </strong>  You can select various question categories. Last in the list is the "new category" link, which opens the form where you can edit, delete or inesert new category. (NOTE: in order to delete category, you have to delete all questions from this category!)
            <br /><br />

               <strong> LIST ALL/ANSWERED/UNANSWERED : </strong>  List questions depending if they are answered or not.
            <br /><br />

              <strong> OPEN ANSWER : </strong>  In order to see the answer just click on the  question, and the answer will open below.
            <br /><br />
             <strong> EDIT QUESTION : </strong>  You can edit the chooesn question if you click on the button "edit" . In the new window you can change category, and/or edit question and answer.
            <br /><br />
         </div>

       
      </div>

    </div>




<!-- MODAL CHECK ACTION-->

<div class="modal fade" id="checkModal" tabindex="-1" role="dialog" aria-labelledby="editModelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">      
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">CONFIRM DELETE</h4>
      </div>
      <div class="modal-body" id="editmodal-body">
        <p>Are you sure that you want to delete this question?</p>
         <p class ="status"></p>
         <span id ="checkId" class="hidden"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="grey-button button-size1" data-dismiss="modal" id="cformCancel">Cancel</button>
        <button type="button" class="grey-button button-size1" id="cformOk">Delete</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!-- NEW MODAL STATUS-->


<!-- NEW MODAL CONFIRM-->


<!-- NEW MODAL EDIT-->

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">      
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Edit Question</h4>
      </div>
      <div class="modal-body" id="editmodal-body">

        <form>

          <select id="editCat"></select><br/><br/>
       <span id="editId" class="hidden"></span>
          <!--  <input type="text" id="editId" class="qlist-id" /><br/>-->

         <textarea id="editQuestion"></textarea><br/><br/><br/>

        <textarea id="editAnswer"></textarea><br/><br/>

         
        

        </form>


       
      </div>
      <div class="modal-footer">

        <button type="button" class="light-button button-size2" data-dismiss="modal" id="editCancel">Cancel</button>
        <button type="button" class="light-button button-size2" data-dismiss="modal" id="qDelete">Delete</button>
        <button type="button" class="blue-button button-size2"  id="editOk">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- NEW MODAL INSERT-->


<div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="editModelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">      
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Insert new question</h4>
      </div>
      <div class="modal-body" id="newmodal-body">

        <form>
             <select class="insertCat"></select><br/><br/>
             <span class="modal-desc">Your Question:</span><br/><br/>
       <textarea id="insertQuestion" ></textarea><br/><br/><br/>
       <span class="modal-desc">  Your Answer:</span><br/><br/>
        <textarea id="insertAnswer" ></textarea>

         
        

        </form>


       
      </div>
      <div class="modal-footer">
        <button type="button" class="light-button button-size2" data-dismiss="modal" id="cformCancel">Cancel</button>
        <button type="button" class="blue-button button-size2" id="insertOk">Insert</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- CATEGORY MANAGER-->


<div class="modal fade" id="newcatModal" tabindex="-1" role="dialog" aria-labelledby="editModelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">      
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Manage Categories</h4>
      </div>
      <div class="modal-body" id="newmodal-body">

        <form>
       
            Insert New category: <br/><br/>

            <input type="text" id="newCategory" class="textbox1" />  <button type="button" class="light-button button-size3" id="newcatOk">Insert new </button>
        

        <br/>   <br/>
      Edit category

        <br/> <br/>

          <select class="insertCat"></select>  <button type="button" class="light-button button-size3" id="deletecatOk">Delete  category</button><br/><br/>

            <input type="text" id="editCategory" class="textbox1" />  <button type="button" class="light-button button-size3" id="editcatOk">Rename </button>

           </form>

       
      </div>
      <div class="modal-footer">
       
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->