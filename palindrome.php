<html>
<head>
<title>Number</title>
</head>
<body style="background-color: rgb(194, 225, 240);">

<?php
echo "<h3><center>PALINDROME</center></h3>";
$a="mom";
$b=strrev($a);

echo "Entered name is $a";
if($b==$a){
    echo "<br> <i><b>$a</b> is palindrome</i>";    
}else{
    echo "<br> <i><b>$a</b> is not a palindrome</i>";
}



?>
</body>
</html>