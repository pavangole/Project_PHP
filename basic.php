<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics</title>
</head>

<body>
    <?php
        $int = 45;  
        $double = 4.5;
        $boolean = true;
        echo "<br/>";
        echo "<h1>Scaler</h1>";
        $string = "String";
        $str = "Also String";
        echo "\n $int";
        echo "\n $double";
        echo "\n $boolean";
        echo "\n $string";
        echo '/n $int';

        echo "<h1>Vectors</h1>";
        $array = array(1,2,"aajkal", 94, 34.34 ,true,false);
        foreach ($array as  $value) {
            echo "<h5>$value</h5>";
        }

        sort($array);
        echo var_dump($array);  


    ?>
</body>

</html>