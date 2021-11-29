<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copy On Write</title>
</head>
<body>
    <?php
        $worker = array("Fred", 35, "Wilma");
        $other = $worker;
        echo var_dump($worker);
        echo var_dump($other);
        $worker[0] = "ok";
        echo var_dump($worker);
        echo var_dump($other);  
        
        $k = 0;
        while($k == 0):
            echo $k;
            $k = 1;
        endwhile;
    ?>
</body>

</html>