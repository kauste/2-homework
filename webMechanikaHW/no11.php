<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && (!isSet($_GET['queue']) )){
    header('Location: https://localhost/bit/2-homework/webMechanikaHW/no11.php?firstPlayer=' . $_POST['firstPlayer'] . '&secondPlayer=' . $_POST['secondPlayer'] . '&queue=1'. '&firstRes=0'. '&secondRes=0');
    die;
}
if($_SERVER['REQUEST_METHOD'] == 'POST' &&  $_GET['queue'] == 1){
    $roll = rand(1, 6);
    $firstRes = $_GET['firstRes'] + $roll;
    $secondRes = $_GET['secondRes'];
    if ($firstRes < 30){
        header('Location: https://localhost/bit/2-homework/webMechanikaHW/no11.php?firstPlayer=' . $_GET['firstPlayer'] . '&secondPlayer=' . $_GET['secondPlayer'] . '&queue=2' . '&firstRes='. $firstRes . '&secondRes=' . $secondRes);
        die;
    } else {
        header('Location: https://localhost/bit/2-homework/webMechanikaHW/no11.php?firstPlayer=' . $_GET['firstPlayer'] . '&secondPlayer=' . $_GET['secondPlayer'] . '&win=1' . '&firstRes='. $firstRes . '&secondRes=' . $secondRes);
        die;
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST' &&  $_GET['queue'] == 2){
    $roll = rand(1, 6);
    $secondRes = $_GET['secondRes'] + $roll;
    $firstRes = $_GET['firstRes'];
    if($secondRes < 30) {
        header('Location: https://localhost/bit/2-homework/webMechanikaHW/no11.php?firstPlayer=' . $_GET['firstPlayer'] . '&secondPlayer=' . $_GET['secondPlayer'] . '&queue=1' . '&firstRes='. $firstRes . '&secondRes=' . $secondRes);
        die;
    } else {
        header('Location: https://localhost/bit/2-homework/webMechanikaHW/no11.php?firstPlayer=' . $_GET['firstPlayer'] . '&secondPlayer=' . $_GET['secondPlayer'] . '&win=2' . '&firstRes='. $firstRes . '&secondRes=' . $secondRes);
        die;
    }
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

<?php if(!isSet($_GET['firstPlayer']) || !isSet($_GET['secondPlayer']) ){
?> 
<body>
    <form action="" method="post">
        <div>
            <label for="firstPlayer">First player name: </label>
            <input type="text" name="firstPlayer" id="firstPlayer">
            <span>Result 0</span>
        </div>
        <div>
            <label for="secondPlayer">Second player name: </label>
            <input type="text" name="secondPlayer" id="secondPlayer">
            <span>Result 0</span>
        </div>
        <button type="submit">Pradeti</button>
    </form>
</body>
<?php
} elseif (!isSet($_GET['win'])) {
?>
<body>
    <div> <?php echo $_GET['firstPlayer']?> rezultatas = <?php echo $_GET['firstRes']?> </div>
    <div> <?php echo $_GET['secondPlayer']?> rezultatas = <?php echo $_GET['secondRes']?> </div>
    <form action="" method="post">
        <div>
            <?php 
            $firstPlayer = $_GET['firstPlayer'];
            $secondPlayer = $_GET['secondPlayer'];
            if(isSet($_GET['queue']) && $_GET['queue'] == '1'){
                echo $firstPlayer;
            } elseif (isSet($_GET['queue']) && $_GET['queue'] == '2'){
                echo $secondPlayer;
            }
            ?>
        </div>
        <button type="submit">Mesti kauliuka</button>
    </form>
</body>
<?php
} else {
?>
<body>
    <div> <?php echo $_GET['firstPlayer']?> rezultatas = <?php echo $_GET['firstRes']?> </div>
    <div> <?php echo $_GET['secondPlayer']?> rezultatas = <?php echo $_GET['secondRes']?> </div>
    <h2 style="color:red">Laimejo 
        <?php if($_GET['win'] == 1){
            echo $_GET['firstPlayer'];
        } else {
            echo $_GET['secondPlayer'];
        }
        ?>
    </h2>
</body>
<?php
}
?>
<body>
</html>