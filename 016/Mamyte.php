<?php
namespace Meska; // paveldejimo neturi
use Old\Super\Mociute; // jei mociute neturi namespace tai use\Mociute;; 

class Mamyte extends Mociute{
    public function __constructor(){
        parent::__constructor(); // kreipiasi vienu lygiu i virsu
        echo '<h3>Mamytes konstrruktorius</h3>';
    }
    public function tvarka() {
        echo '<h3>Viskas sutvarkyte</h3>';
    }
    
    
}