<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    header('Location: https://localhost/bit/2-homework/webMechanikaHW/rose.php?color=red');
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
<body style="background-color:pink">
    <form method="post">
        <button type="submit">GO TO ROSE</button>
    </form>
    
</body>
</html>