<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $amount = $_GET['amount'];
    $num = count($_POST);
    header('Location: https://localhost/bit/2-homework/webMechanikaHW/no10.php?amount=' . $amount . '&num=' . $num);
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
<?php
$amount = rand(3, 10);
$letters = range('A', 'J');
if(!isSet($_GET['num'])){
?>
<body style="background-color:black">
    <form action="https://localhost/bit/2-homework/webMechanikaHW/no10.php?amount= <?php echo $amount?>" method="post">
        <?php for($i = 0; $i < $amount; $i++){
        ?>
        <div>
            <label style="color:white; display:inline-block" for="<?php echo $letters[$i]?>"><?php echo $letters[$i]?></label>
            <input type="checkbox" id="<?php echo $letters[$i]?>" name="<?php echo $letters[$i]?>"></input>
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
    <ul>
    <li>Viso buvo pateikta<?php echo $_GET['amount']?> variantai.</li>
    <li>Is ju pazymeti <?php echo $_GET['num'] ?> variantai</li>
    </ul>
</body>
<?php
}
?>
</html>
<!-- Pakartokite 9 uždavinį. Padarykite taip, kad atsirastų du skaičiai. Vienas rodytų kiek buvo pažymėta, o kitas kiek iš vis buvo jų sugeneruota. -->