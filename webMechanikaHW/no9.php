<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $num = count($_POST);
   header('Location: https://localhost/bit/2-homework/webMechanikaHW/no9.php?num=' . $num);
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
<?php if(!isSet($_GET['num'])){
?>
<body style="background-color:black">
    <form action="" method="post">
        <?php
        $amount = rand (3, 10);
        $letter = range('A','J');
        for($i = 0; $i < $amount; $i++){
        ?> <div>
                <label for="<?php echo $letter[$i]?>" style="color:#fff; display:inline-block"><?php echo $letter[$i]?></label>
                <input type="checkbox" name="<?php echo $letter[$i]?>" id="">
            </div>
        <?php
        }
        ?>
        <button type="submit">GO</button>
    </form>
</body>
<?php
} else {
?>
<body>
    <div> Pazymeti <?php echo $_GET['num'] ?> atsakymai <div>
</body>
<?php
}
?>
</html>
<!-- Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek).  -->
