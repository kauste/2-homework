<?php
if( isSet($_GET['color']) && $_GET['color'] == 'red'){
    header('Location: https://localhost/bit/2-homework/webMechanikaHW/blue.php?');
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

<body style="background-color:red">
    <a href="https://localhost/bit/2-homework/webMechanikaHW/red.php?color=red">Click me</a>
    
</body>
</html>
<!-- Sukurkite du atskirus puslapius blue.php ir red.php Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!). Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų, o PHP kodas (ne tiesiogiai html tagas!) naršyklę peradresuotų į kitą puslapį (iš raudono į mėlyną ir atvirkščiai). -->