<html DOCTYPE=html5>
    <head>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
        <title> Classwork 04.04.2016</title>

    </head>
    <body>
 <?php
         $i = 1;
		 while($i <= 10){
			echo $i;
			$i++;
		 }
?>    
<br>
<br>
<?php
        $i = 1;
		$result = 0;
		while($i <= 100){
			$result = $result + $i;
			$i++;
		}
		echo $result;
 ?>
 <br>
<br>
<?php
         $i = 1;
		 while($i <= 50){
			$pred = ($i - 1);
		    $ost = ($i + $pred)%3;
			if($ost == 0){
				echo ".", $i;
			}
			$i++;
		 }
?>
<br>
<br>
<?php
     for($i = 1; $i <= 10; $i++){
		echo $i;
	 }

 ?>
 <br>
<br>
<?php
         $result = true;
		 $per = 5;
        for($i = 2; $i < $per; $i++ ){
			if($per % $i == 0){
			$result = false;
			break;
			}
		}
		if($result == true) {
				echo "yes";
		}
		else{
			echo "no";
		}
 ?>
  <br>
<br>
<?php
/*
*/

      $num = 0;
	  $result = 0;
     $arr = array(30, 40, 50,20);
	 foreach($arr as $val){
	  $result = ($num*0.01) + $val;
	  echo $result;
	 }
	 
	 
?>


 
 
    </body>
    </html>  