<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No7</title>
</head>
<?php 
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $bgColor ='green';
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $bgColor = 'yellow';
}
?>
<body style="background">
    <form method="get">
        <button type="submit">Make me green</button>
    </form>
    <form method="post">
        <button type="submit">Make me yellow</button>
    </form>
</body>
</html>