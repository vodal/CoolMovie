<html DOCTYPE=html5>
    <head>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
        <title> Classwork 01.04.2016</title>

    </head>
    <body>

<?php
      $sum = 15;
      $cost_b = 10;
      $cost_w = 5;
      if($sum >=($cost_b+$cost_w)){
        echo "хлеб и вода";
      }
      elseif($sum <= $cost_b){
        echo "только хлеб";
      }
      else {
        echo "домой";
      }
?>
<br>
<br>

<?php
      $ball = 83;
      $result = 0;
      if($ball>=90)                 {
        $result = 5;
              }
      elseif($ball>=80 && $ball<=90){
        $result = 4;
              }
      elseif($ball>=70 && $ball<=80){
        $result = 3;
              }
      else                           {
         $result = 0;
               }
          echo $result."бала";
?>
<br>
<br>
<?php
            $person = 0;
            switch($person){
                case "vasja":
                    echo "hello, vasja";
                    break;
                case "roma" :
                    echo "hello, roma";
                    break;
                case "sveta":
                    echo "hello, sveta";
                    break;
                default: 
                    echo "buy, buy";
                    break;
            }

?>
<br>
<br>



</body>
</html>