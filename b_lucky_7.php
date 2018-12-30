<!DOCTYPE html>
<html>
	<head>
			<title>
				
			</title>
		<script></script>
		<style>
		
		</style>
	
	</head>
	<body>		
		<form name="" action="" method="post">
			<label for="input1">Input data pertama :
			</label>
			<input name="input1" id="input1" type="number"><br/>
			
			<input name="sum" value="Count" type="submit">
		</form>
		<br/>
		<?php
			if(isset($_POST['sum'])){
				$var1 = $_POST['input1']; 
				for($i=1;$i<= $var1;$i++){
					for($j=1;$j<= $i;$j++){
						if($j == 1 || $j==$i){
							$value[$i][$j]=1;
						}else{
							$value[$i][$j]=$value[$i-1][$j] + $value[$i-1][$j-1];
						}
						$segitiga .= $value[$i][$j]." ";
					}
					$segitiga .= "<br/>";
				}
				echo "<center> " . $segitiga . "</center>";
			}
		?>
	</body>
</html>
