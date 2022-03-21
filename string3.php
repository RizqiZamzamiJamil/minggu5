<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <?php
            $rawString = "Welcome Birmingham Parent.
            Your replacement is a pleasure to have!";
            
            $malestr = str_replace("replacement", "son", $rawString);
            $famalestr = str_replace("replacement", "daughter", $rawString);
            
            echo "Son: ". $malestr. "<br>";
            echo "Daughter: ".  $famalestr. "<br>";
        ?>
    </body>
</html>