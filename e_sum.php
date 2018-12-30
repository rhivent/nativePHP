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
			<label for="input2" >Input data kedua :
			</label>
			<input name="input2" id="input2" type="number"><br/>
			
			<input name="sum" value="SUM" type="submit">
		</form>
		<br/>
		<?php
			if(isset($_POST['sum'])){
				$var1 = $_POST['input1']; 
				$var2 = $_POST['input2']; 
				$sum = $var1 + $var2;
				echo "Total penjumlahan data adalah " . $sum;
			}
		?>
	</body>
</html>
