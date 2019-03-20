<?php
  echo"<table border='1' align='center'><tr><td align='center'>";
    for($i=0;$i<=4;$i++){
       for($a=$i;$a>=0;$a--){
         echo('*');
       }
    echo"<br/>";
   }
  for($i=0;$i<=3;$i++){
    for($a=$i;$a<=3;$a++){
      echo('*');
    }
  echo"<br/>";
  }
 echo"</td></tr></table>";
?>