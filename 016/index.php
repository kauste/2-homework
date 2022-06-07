<?php 
use Meska\Vaikas;
// require __DIR__.'/Stikline.php';
// // require __DIR__ . '/Cart.php';
// require __DIR__.'/Mociute.php';
// require __DIR__.'/Mamyte.php';//svarbu kad tevinis elementas virsuje// tevas gali trureti daug vaiku
// require __DIR__.'/Vaikas.php'; // vaikas gali tureti tik 1 teva (gali extendint tik 1 tevini elementa); paveldi ir is mociutes;

// spl_autoload_register(function($class){
//     echo '<h3>Reikia 1: '.$class. '</h3>';
// });
// spl_autoload_register(function($class){
//     echo '<h3>Reikia 2: '.$class. '</h3>';
//     require __DIR__.'/'.$class.'.php';
// });

require __DIR__ .'/vendor/autoload.php';

// \<NamespaceName>(\<SubNamespaceNames>)*\<ClassName> nameSpace- kai i viena projekta sukeliame daugybe klasiu


$v = new Vaikas;
$v2 = new Vaikas;
$v3 = new Vaikas;
$v ->betvarke();
$v ->tvarka();
$v -> pasaka();



$c1 = Cart::create();
$c2 = Cart::create();
echo serialize($c1); //php viduje turi buda objektus paversti i stringus
$c3 = unserialize(serialize($c1)); // turi viduje metoda wake up// pries serilizacija pasileidzia sleep metodas, o wake up pakeliam
echo '<br>';
echo json_encode($c1);
echo '<br>';
echo cart::BAD; // o viduj su self!! konstantos globalios ten, kur yra inkludinta
$s1 = new Stikline;
$s2 = new Stikline;
$s3 = new Stikline;

echo '<pre>';
print_r($s1);
print_r($s2);
print_r($s3);

echo '<br>';

print_r($c1);
print_r($c2);
echo '<br>';

//Statine savybe yra tuomet kai kazkoks demuo bendras visiems visiems. Pvz jei keliu objektu kintamajam reikia visu objektu sumos; Statine savybe atspauzdinama taip: 
echo Stikline::$drink; // galima pasiekti tik su public, su PRIVATE TIK IS VIDAUS
Stikline::$drink = 'Kisielius';
//$s1->valio() is statinio galima paleisti, bet nereiketu reiketu tai
Stikline::valio();
$s2->what();
$s3->what();
