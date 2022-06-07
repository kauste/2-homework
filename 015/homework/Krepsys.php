<?php
define('DYDIS', 300);
class Krepsys {
    private $dydis = DYDIS;
    public function __get($what){ //butinas argumentas Ka gettint
        echo '<br> Krepsio dydis: '. $this -> $what; 
    }
}