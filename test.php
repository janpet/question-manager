 <?php 

 //DODAMO NEŠTO
if (mt_rand(0, 1) < 0.5) {
   echo "do 50%";
   $design_name="design1.css";
}

else if (mt_rand(0, 1) < 0.75) {  echo "do 75%";   $design_name="design2.css";}

else  if (mt_rand(0, 1) < 1) {   echo "do 100%";    $design_name="design3.css";}



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Test za test</title>
 <link href=<?php echo '"'.$design_name.'"'  ?> rel="stylesheet">
 	
 </head>
 <body>
 
 </body>
 </html>