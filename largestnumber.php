<html>
    <head>
        <title> largest number</title>
    </head>
    <body style="background-color: rgb(204,127,157);">
        <h2 align="center" style="color: yellow;">LARGEST NUMBER</h2>
        <?php
            $a=10;
            $b=20;
            $c=30;
            echo "Value of first number is $a ";
            echo "<br>Value of second number is $b ";
            echo "<br>Value of third number is $c ";
            echo "<hr>";
            if($a>$b){
                if($a>$c){
                    echo "<i><br>First number <b> $a </b> is largest among all other numbers mentioned.</i>";
                }else{
                    echo "<i><br>Third number <b> $c </b> is largest among all other numbers mentioned.</i>";
                }
                }
            else if($b>$c){
                    echo "<i><br>Second number <b> $b </b> is largest among all other numbers mentioned.</i>";
                }else{
                    echo "<i><br>Third number <b> $c </b> is largest among all other numbers mentioned.</i>";
                }
            
        ?>
    </body>
</html>