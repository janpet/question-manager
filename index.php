<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Question manager -simple Q/A app </title>

  <meta name="description" content="Questions and answers app" />
    <meta name="author" content="Janko Prester" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />


  <!-- ////////////////////////////////////////////// Mobile meta ///////////////////////// -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


    
   <!-- ////////////////////////////////////////////// CSS styles ///////////////////////// -->
 
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mystyles.css" rel="stylesheet">
<style>
  .old-ie{display:none;}

  </style>


<!-- OLD BROWSERS SUPPORT -->


<!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
     <link rel="stylesheet" type="text/css" href="css/mystyles_ie.css" />
<![endif]-->   

<!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="css/bootstyle_ie.css" />

<![endif]-->   

 <!--[if lt IE 7]>
    <link rel="stylesheet" type="text/css" href="css/bootstyle_ie6.css" />
    <link rel="stylesheet" type="text/css" href="css/mystyles_ie.css" />



	<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::: Fonts ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


	   <!-- :::::::::::::::::::::::::::::::::::::::::::::: OLD BROWSER SCRIPTS :::::::::::::::::::::::::::::::::::::::::::::::::: -->    
    <!--[if IE 6]>  
    
      <script type="text/javascript" src="lib/ie6.min.js"></script>
       <script type="text/javascript" >
        $(function(){if($.browser.msie&&parseInt($.browser.version,10)===6){$('.row div[class^="span"]:last-child').addClass("last-child");$('[class*="span"]').addClass("margin-left-20");$(':button[class="btn"], :reset[class="btn"], :submit[class="btn"], input[type="button"]').addClass("button-reset");$(":checkbox").addClass("input-checkbox");$('[class^="icon-"], [class*=" icon-"]').addClass("icon-sprite");$(".pagination li:first-child a").addClass("pagination-first-child")}})
      </script>
      
    <![endif]-->
        
    <!--[if lt IE 9]>


      <script src="lib/html5.js"></script>
         <script src="lib/html5shiv.js"></script>
   <script src="lib/respond.js"></script>   

      <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
     
      <script type="text/javascript">

        document.createElement("header");
        document.createElement("nav");
        document.createElement("article");
        document.createElement("section");
        document.createElement("footer");

      </script>


     <![endif]--> 
    
		<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::: Icon ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
			<link href='favicon.ico' rel='icon' type='image/x-icon'/>
</head>

<body>


<header>
  
    <div class="container">


       <div class="col-xs-10 col-sm-2 col-md-2 col-lg-2">

       <div class="logo">
       <a href="index.php">  <img src="img/qm_logo.gif" /></a>
         </div>



       </div>


         <div class="col-xs-6 col-sm-5 col-md-5 col-lg-5 hidden-xs">

         <div class="form-search">

               <form name ="searchForm">
                <input type ="text" id="searchId" class="search-box" /> <span class="icon-search"></span> <button id ="searchBtn" class ="light-button button-size1">Search</button>


              </form>

          </div>

       </div>



    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 hidden-xs">
             <ul class="topLinks ">

                   <li> <a href="#" id="modalAbout">About</a></li>     <li>  <a href="#" id="modalHelp">Help</a> </li> 


                </ul>
       </div>

       <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 hidden-xs">
       <div class="postavi-upit ">
        <button id ="newqBtn" class ="blue-button button-size3">New question <span class="icon-white icon-plus-sign"></span></button> 
        </div>

        
       </div>

       <div class="col-xs-2 visible-xs pull-right">


        <div id="nav-menu-trigger"> </div>
       



       </div>


    </div>

  <div class ="clearfix"></div>




</header>


<div class ="clearfix"></div>

  <div class="mobile-menu">
    
      <div class="col-xs-8  visible-xs">

         <div class="form-search">

               <form name ="searchForm">
                <input type ="text" id="searchId-mob" class="search-box" /> <span class="icon-search"></span> <button id ="searchBtn-mob" class ="light-button button-size1">Search</button>


              </form>

          </div>

       </div>



    <div class="col-xs-4  visible-xs">
             <ul class="topLinks ">

                   <li> <a href="#" id="modalAbout-mob">About</a></li>     <li>  <a href="#" id="modalHelp-mob">Help</a> </li> 


                </ul>
       </div>


        <div class ="clearfix"></div>
  </div>



<div id="main">

   <div class="container">
  
       
      

  <br/>
    <p id ="oznaka"></p>

     <br/>
 
    <section class="list-info">


         
            <div class="col-xs-6 col-sm-12"> <p class="q-desc">CATEGORY : <span id ="chosenCat">All</span>  :  <span id ="ansStatus">All questions</span></p></div>

<div class="col-xs-6">
         <div class="postavi-upit visible-xs">
         <button id ="newqBtn" class ="blue-button button-size3">New question <span class="icon-white icon-plus-sign"></span></button> 
           </div>
   </div>
    </section>

   <div class ="clearfix"></div>

      <br/>   <br/>


      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">


         <section class="navSidebar">



               <select id="categories-section">

                


              </select>

                <br /><br />
         
            <ul class ="answeredList"> <li><a href ="#" id="allQ" class="questionsselect">All Questions</a> </li> <li><a href ="#" id="answeredq">Answered</a></li> <li><a href ="#" id="unansweredq">Unanswered</a></li>  </ul> 

            <div class ="clearfix"></div>
            <br /><br />


   
         </section>



      
       </div>

         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">

              <section class="mContent">
        
                  <div id ="mainQuestions">
                

                  </div>

            
               </section>

          </div>
   



   
       

        <div class="loader"><img src="img/indicator.gif"></div><br/>

        <div class="result"></div>

       </div>
   </div>


       

        

 <div class ="scTop" id="toTop"> 

 
     <a  href="#"><img src="img/arrow_top.gif"></a> </div>


<br/><br/>
<?php include('templates/modals.php') ?>
<div class="container">

<footer class="text-center">Copyright 2014</footer>
</div>



    
    

<script type="text/javascript" src="lib/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="lib/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="lib/bootstrap.js"></script>

<script type="text/javascript" src="app/classes/Question.js"></script>
<script type="text/javascript" src="app/classes/Category.js"></script>
<script type="text/javascript" src="app/ui.js"></script>

<!--<script type="text/javascript" src="app/app.js"></script>-->

  



</body>
</html>