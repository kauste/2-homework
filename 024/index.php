<?php
//useris iveda du miestus ir gauna atstuma tarp tu dvieju miestu

//kuomet kalbame apie serverio bendravima su kitu serveriu, svarbi savoka API- application programming interdace; tai neturi nieko bendro su 
//interface metodu, aprasytu linku sarasas ; tai yra tik isore, API interface- abstraktus link usarasiukas, kuriais kazka taip gaunam.
//REST ir API daznai suklijuoti i viena vieta, bet nieko bendro tarp ju nera; REST- tai architekturine 'plyta', yra aiskios taisykles kas kaip kur 
//ir del ko turi padaryti.
//API dazniausiai gaminamas pagal REST architektura -representational state trasfer
//REST yra nemandagus- su kuo nera kontekstinio bendravimo: paprasiau gavau; paprasiau, patikrino ar galiu gaut, gavau
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$ch = curl_init(); //sukuriam resursa
//resursas- tai duomenu tipas, kuris jau tapo objektu
var_dump($ch);
curl_setopt($ch, CURLOPT_URL, 'https://www.distance24.org/route.json?stops='.$_POST['from'].'|'.$_POST['to']); // kur kreipiames
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);//  gaunam info (bent konkreciu atveju json ovj)
curl_close($ch); //
$output = json_decode($output);
//kai turim objekta, mums reikia set up
$_SESSION['dist']= $output->distance;
header('Location: https://localhost/bit/2-homework/024/');
die; //kadan
}
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $dist = $_SESSION['dist'] ?? '';
    unset($_SESSION['dist']);
    ?>
    <form action="" method="post">
        <input type="text" name="from" id="">
        <input type="text" name="to" id="">
        <button type="submit">SHOW DISTANCE</button>
    </form>
    <h2><?=$dist?></h2>
    <?php
}