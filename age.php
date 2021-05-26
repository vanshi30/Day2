<html>
	<head>
		<title>age</title>
	</head>
	<body style="background-color: rgb(242, 252, 173);">
	<h2 style="color: red;"><center>AGE</center></h2>
		<?php
		echo "<hr>";
		echo "use of switch statement<br>";
		echo "<hr>";
		$age=18;
		echo "Entered age is $age<br>";
		switch($age){
				case 18: 
					echo "You are <b>$age</b> years old";
					break;	
				case 20: 
					echo "You are <b>$age</b> years old";
					break;
				case 30: 
					echo "You are <b>$age</b> years old";
					break;
				default:
					echo "Enter your age properly";
				}

		?>
	</body>
</html>