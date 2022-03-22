<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <h2>Sorting Array</h2>
        <?php
            $age = array(
                "Joe" => "29",
                "Elsa" => "27",
                "Kevin" => "32",
                "Nick" => "24",
                "Olaf" => "9",
                "Ana" => "17"
            );
        asort($age);
        
        foreach($age as $name => $value){
            echo "name = " . $name . ", age = " . $value . "<br>";
        }
        echo "<br>";
        echo "Menggunakan rsort<br>";
        $age = array(
            "Joe" => "29",
            "Elsa" => "27",
            "Kevin" => "32",
            "Nick" => "24",
            "Olaf" => "9",
            "Ana" => "17"
        );
        rsort($age);
        foreach($age as $name => $value){
            echo "name = " . $name . ", age = " . $value . "<br>";
        }
        echo "<br>";
        echo "Menggunakan ksort<br>";
        $age = array(
            "Joe" => "29",
            "Elsa" => "27",
            "Kevin" => "32",
            "Nick" => "24",
            "Olaf" => "9",
            "Ana" => "17"
        );
        ksort($age);
        foreach($age as $name => $value){
            echo "name = " . $name . ", age = " . $value . "<br>";
        }
        echo "<br>";
        echo "Menggunakan arsort<br>";
        $age = array(
            "Joe" => "29",
            "Elsa" => "27",
            "Kevin" => "32",
            "Nick" => "24",
            "Olaf" => "9",
            "Ana" => "17"
        );
        arsort($age);
        foreach($age as $name => $value){
            echo "name = " . $name . ", age = " . $value . "<br>";
        }
        echo "<br>";
        echo "Menggunakan krsort<br>";
        $age = array(
            "Joe" => "29",
            "Elsa" => "27",
            "Kevin" => "32",
            "Nick" => "24",
            "Olaf" => "9",
            "Ana" => "17"
        );
        krsort($age);
        foreach($age as $name => $value){
            echo "name = " . $name . ", age = " . $value . "<br>";
        }
        ?>
    </body>
</html>