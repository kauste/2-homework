<?php
if(isSet($_GET['color'])){
    header('Location: https://localhost/bit/2-homework/webMechanikaHW/red.php');
    die;
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:blue">
    <a href="https://localhost/bit/2-homework/webMechanikaHW/blue.php?color=blue">Click me</a>
    
</body>
</html>