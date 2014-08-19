<?php 

$workers =array();

$workers[0] = array(
'name' => 'janko', 
'surname' => 'prester', 
'mail' => 'janko2p@gmail.com'
);


$workers[1] = array(
'name' => 'ivan', 
'surname' => 'ivankovic', 
'mail' => 'ivan@ivankovic.com'
	);

$workers[2] = array(
'name' => 'maja', 
'surname' => 'pernar', 
'mail' => 'majap@info.com'
	);

 ?>



<?php foreach ($workers as $worker) { ?>

<h1><?php echo $worker["name"] ?></h1>
<h1><?php echo $worker["surname"] ?></h1>
 <dl>
 	<dt>worker mail</dt>
 	<dd><?php echo $worker["mail"] ?></dd>
 	


 </dl>


<?php }; ?>




