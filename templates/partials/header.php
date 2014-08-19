<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Question manager -simple Q/A app </title>

   <meta name="description" content="x" />
	<meta name="author" content="x" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
	

 
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/framework.css" rel="stylesheet">
  <link href="css/mystyles.css" rel="stylesheet">
  <link href="css/baza_style.css" rel="stylesheet">


<!-- Prilagodba stilova za starije browsere -->


    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/baza_style_ie.css" />
    <![endif]-->    
  
  
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="css/baza_style_ie7.css" />
    <![endif]-->  
		
	<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::: Fonts ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
  <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

	   <!-- :::::::::::::::::::::::::::::::::::::::::::::: Skripte za starije browsere :::::::::::::::::::::::::::::::::::::::::::::::::: -->    
    <!--[if IE 6]>  
    
      <script type="text/javascript" src="lib/ie6.min.js"></script>
       <script type="text/javascript" >
        $(function(){if($.browser.msie&&parseInt($.browser.version,10)===6){$('.row div[class^="span"]:last-child').addClass("last-child");$('[class*="span"]').addClass("margin-left-20");$(':button[class="btn"], :reset[class="btn"], :submit[class="btn"], input[type="button"]').addClass("button-reset");$(":checkbox").addClass("input-checkbox");$('[class^="icon-"], [class*=" icon-"]').addClass("icon-sprite");$(".pagination li:first-child a").addClass("pagination-first-child")}})
      </script>
      
    <![endif]-->
        
    <!--[if lt IE 9]>


      <script src="lib/html5.js"></script>

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



 <div class="container">



            <div class="grid_3">
              
                <div class="logo"> <a href ="http://knjiznica.hzz.hr/bazaZnanja/"><img src="img/baza_logo.gif" width="231" height="66" alt="HZZ logo"/></a></div>


            </div>


              <div class="grid_5">
              
                      
                  <div class ="section-pretraga">
                        
                              <div class="form-upit">
                                     
                                    
                               
                                <asp:TextBox ID="txtTrazi" runat="server"  class ="search-box"></asp:TextBox>
                                          <span class="icon icon-search"></span>
                                      <asp:Button ID="btnTrazi" runat="server" Text="Traži" class ="btn-grey btn2-r-size2" onclick="btnTrazi_Click" />

                                    <br />                         
                                     
                                    

                              </div>

                    

                  </div>
            

            </div>

                <div class="grid_2">

                <ul class="topLinks">

          <li> <a href="#" id="startStat">Statistika upita</a></li>     <li>  <a href="#" id="pomocMstart">Pomoć</a> </li> 


                </ul>
                
       </div>
      
     <div class="grid_2 text-r">
        
         <asp:LinkButton ID="lnkPostaviUpit" runat="server" 
                      onclick="lnkPostaviUpit_Click" CssClass ="btn-red btn2-r-size2 postavi-upit">Novi upit</asp:LinkButton><span class="icon-white icon-plus-sign"></span>

                      <br /> <br />
                      
    
      
       </div>
   
            
                    
          
          

         

          <div class ="clearfix"></div>

      </div>

  
     <div class ="clearfix"></div>


