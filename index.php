<?php 
    $time = date("H");
    if($time >= "6" && $time <= "12"){
        $txt = "Goede morgen!";
        $img = "morning.png";
    }
    else if($time >= "12" && $time <= "18"){
        $txt = "Goede middag!";
        $img = "afternoon.png";
    }
    else if($time >= "18" && $time <= "0"){
        $txt = "Goede avond!";
        $img = "evening.png";
    }
    else if($time >= "0" && $time <= "6"){
        $txt = "Goede nacht!";
        $img = "night.png";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <title>Goedendag</title>
<style>
    *{
    margin:0;
    padding:0;
}

body {
    background-image: url("<?= $img ?>");
    background-size: cover;
}
h1{
    font-family: 'Lobster', cursive;
    text-align:center;
    color:white;
}
</style>
</head>
<body>
    <h1>
        <?php
         echo $txt . "<br>";
         echo "Het is nu " . date("H:i");
        ?></h1>
</body>
</html>