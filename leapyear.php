<html>
    <head>
        <title> leap year</title>
    </head>
    <body style="background-color: rgb(204,127,157);">
        <h2 align="center">LEAP YEAR</h2>
        <?php
            $year=2020;
            echo "Year entered is $year ";
            if($year%4==0){
                echo "<br>$year is a leap year";
            }else{
                echo "<br>$year is not a leap year";
            }

            
        ?>
    </body>
</html>