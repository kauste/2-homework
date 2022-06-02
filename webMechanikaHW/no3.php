<?php
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $chosenColor = $_POST['chooseColor'];
        header('Location: https://localhost/bit/2-homework/webMechanikaHW/no3.php?color='. $chosenColor);
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
    
    $bgColor = $_GET['color'] ?? 'pink';
   
    
    
?>
<body style="background: <?php echo $bgColor ?>">
    <form action="" method="post">
    What color would you like : <input type="text" name="chooseColor">
    <button type="submit">I chose it</button>
    </form>
</body>
</html>
<!-- Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje. -->