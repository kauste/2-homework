<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $bgColor = 'green';
}
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $bgColor = 'yellow';
    }
?>
<body style="background:<?php echo $bgColor ?>">
    <form method="get">
    <button type="submit">Make me green</button>
    </form>
    <form method="post">
    <button type="submit">Make me yellow</button>
    </form>
</body>
</html>
<!-- Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skairtingas formas- vieną GET ir kitą POST. Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST. -->