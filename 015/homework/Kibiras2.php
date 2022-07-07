<?php

class Kibiras2 {
    protected $akmenuKiekis;
    private static $akmenuKiekisVisuoseKibiruose;
    public function prideti1Akmeni(){
        $this -> akmenuKiekis +=1;
        self::$akmenuKiekisVisuoseKibiruose +=1;
    }
    public function pridetiDaugAkmenu($kiekis){
        $this -> akmenuKiekis += $kiekis;
        self::$akmenuKiekisVisuoseKibiruose += $kiekis;
    }
    public static function get(){
        return self::$akmenuKiekisVisuoseKibiruose;
    }
}
//(STATIC) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras2. Patobulinkite pridėdami statinę privačią savybę akmenuKiekisVisuoseKibiruose. Ši savybė turi rodyti kiek akmenų surinkta visuose Kibiras2 objektuose. Sukurkite geterį objekte, ir statinį geterį klasėje, kuris išvestų akmenuKiekisVisuoseKibiruose reikšmę. Sukurkite tris kibirus ir pademonstruokite veikimą.
