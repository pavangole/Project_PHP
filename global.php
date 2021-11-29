<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Scope</title>
</head>
<body>
    <?php
    function updateCounter()
    {
        global $counter;
        $counter++; 
    }
    
    $counter = 10;
    updateCounter();
    
    echo $counter;
    ?>
</body>
</html>