<html>
	<head>
		<title>calculator</title>
	</head>
	<body style="background-color: rgb(242, 252, 173);">
	<h2 style="color: purple;"><center>CALCULATOR</center></h2>
		<?php
        echo "<hr>";
		echo "use of switch statement<br>";
        echo "<hr>";
		$a=30;
        $b=5;
        $c=1;
        echo "First number is $a<br>";
        echo "Second number is $b<br>";
        echo "<h3>Operation numbers</h3>";
        echo "1->Addition<br> 2->Substraction<br> 3->Multiplication";
        echo "<hr>";
		echo "Entered operation number is $c <br>";
        echo "<hr>";
		switch($c){
				case 1: 
					echo "Addition:".($a+$b);
					break;	
				case 2: 
					echo "substraction:"($a-$b);
					break;
				case 3: 
					echo "Multiplication:".($a*$b);
					break;
				default:
					echo "Enter proper operation number";
				}

		?>
	</body>
</html>