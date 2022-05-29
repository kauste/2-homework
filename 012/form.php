<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //die($_POST['Tek'])//--- gausim duomenis is formos
    //$kintamas = $_POST['Tek'] - cia pabuna ir mirsta
    $_SESSION['bla'] = $_POST['tek']; // pasidedu i nemarumo kambariuka- kintamaji bla
    header('Location: https://localhost/bit/2-homework/012/form.php');
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
 <?php
   echo $_SESSION['bla'];
//echo  $kintamas jau mires;
?>
<form action="" method="post">
Tavo tekstas: <input type="text" name="tek">
<button type="submit">GO</button>
</form>
</body>
</html>