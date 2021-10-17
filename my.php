<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>The tabuadinha</title>
	<link rel="stylesheet" type="text/css" href="my.css">
</head>
<body>
	<div class="title">
	<h1>The Tabuadinha :(</h1>
	</div>
		<form action="my.php" method="GET">
			<div class="center">
				<input type="number" name="n1" placeholder="Number" required>
				<button style="background-color: grey;">Calculate</button>
		</div>
	</form>

	<div class="texto">
	<?php
	$n1 = @$_GET['n1'];
	for ($i=0; $i < 10 ; $i++) { 
	 $resu = $i * $n1;
	  echo "</br> $i x $n1 = ".$resu;
		
	}
	
	?>
   </div>
	
	
</body>
</html>