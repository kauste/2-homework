<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 12</title>
</head>
<body>
    <h1>Hello Kitty</h1>
    <a href='https://localhost/bit/2-homework/012/?page=1'>PAGE 1</a>
    <a href='https://localhost/bit/2-homework/012/?page=2'>PAGE 2</a>
    <a href='https://localhost/bit/2-homework/012/?page=3'>PAGE 3</a>
    <?php
    // echo $_GET['count']; 
    // echo '<br>';
    // echo $_GET['a2']; urle prideti ?count=333&a2=777
    if($_GET['page'] == 1){
        ?> <h1>First page</h1>
        <?php
    }
    if($_GET['page'] == 2){
        ?> <h2>Second page</h2>
        <?php
    }
    if($_GET['page'] == 3){
        ?> <h3>Third page</h3>
        <?php
    }
    ?>

</body>
</html>