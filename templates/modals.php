

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