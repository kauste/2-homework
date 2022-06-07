<?php
namespace Old\Super; // gali but ir be klases, tada Use buna tiesiog use Mociute; Namespace pagal folderiu struktura
class Mociute {

    public function __constructor(){
        
        echo '<h3>Mociutes konstrruktorius</h3>';
    }
    protected $posakis = 'Vava, sakiau tau.'; //leidzia seimami matyti kintamaji, bet neisein uz jos ribu
    public static $posakis2 = 'Pagyvensim pamatysim';
    private $pasakymas = 'ojojj'; /// privatu
    public function pasaka(){
        echo '<h3>Seku seku pasaka apie meskena</h3>';
        echo '<p>'. self::$posakis2. '</p>';// kokreciai sios klases statinis kintamasis
        echo '<p>'. static::$posakis2. '</p>';// static atsizvelgia i overwtite kurie ivyksta extention metu// ji atsiskleidzia kai iki galo ivyksta visas extendinimas. static gali perduotiir metoda
    }
}

//STATINIAI PAVELDEJIMAI