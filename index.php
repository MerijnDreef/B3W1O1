<?php 
    $time = strtotime('+1 hour');
    strtotime('+1 hour', $time);
    $time = date("H:i", strtotime('+0 hour'));
    // if(){

    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dag.css">
    <title>Goedendag</title>
</head>
<body>
    <img src="">
    <h1>
        <?php
         echo "Het is nu " . $time;
        ?></h1>
</body>
</html>