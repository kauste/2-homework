<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No2</title>
</head>

<?php if(isSet($_GET['color'])){
        $BckColor = $_GET['color'];
    } else 
        $BckColor = '000';
    ?>
<body style="background-color:#<?php echo $BckColor ?>">
    <a href="https://localhost/bit/2-homework/webMechanikaHW/no2.php">Black</a>
    <a href="https://localhost/bit/2-homework/webMechanikaHW/no2.php?color=ff1234">Miricle</a>
</body>
</html>
<!-- Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos. -->