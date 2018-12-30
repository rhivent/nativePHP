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
			<label for="input1">Input angka 1 :
			</label>
			<input name="input1" id="input1" type="number"><br/><label for="input2">Input angka 2 :
			</label>
			<input name="input2" id="input2" type="number"><br/>
			
			<input name="sum" value="Calculate" type="submit">
		</form>
		<br/>
		<?php
			if(isset($_POST['sum'])){
				$var1 = $_POST['input1']; 
				$var2 = $_POST['input2']; 
				for($i=0;$i<=10;$i++){
					echo $var1 . " => " . $var2 . " => ";
					$var1 += 2;
					$var2 += 2;
				}
				
			}
		?>
	</body>
</html>
