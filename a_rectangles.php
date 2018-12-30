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
			<label for="inputn">Input board's size for N :
			</label>
			<input name="inputn" id="inputn" type="number"><br/>
			
			<label for="inputm" >Input board's size for M :
			</label>
			<input name="inputm" id="inputm" type="number"><br/>
			
			<label for="inputa">Input rectangle's size for A :
			</label>
			<input name="inputa" id="inputa" type="number"><br/>
			
			<label for="inputb" >Input rectangle's size for B :
			</label>
			<input name="inputb" id="inputb" type="number"><br/>
			
			<input name="rectangle" value="Calculate" type="submit">
		</form>
		<br/>
		<?php
			if(isset($_POST['rectangle'])){
				$n = $_POST['inputn']; 
				$m = $_POST['inputm']; 
				$a = $_POST['inputa']; 
				$b = $_POST['inputb'];
				
				$max = floor(($n*$m)/($a*$b));
				echo "The maximum number of rectangles that can be place on the board is " . $max;
			}
		?>
	</body>
</html>
