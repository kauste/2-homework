<?php
namespace Meska; //namespace gali buti ir Meska\Lokys ir tt; Meska Lokys ant mamytes irgi uzsimeta
class Vaikas extends Mamyte { // vaikas paveldeja visus metodus is mamos
    
    public static $posakis2 = 'karpe die';
    public function __constructor(){
        parent::__constructor();
        echo '<h3>Vaiko konstrruktorius</h3>';
    }
    public function betvarke() {
        echo '<h3>Visiska betvarke</h3>';
    }
    public function pasaka(){
        echo '<h3>Skrolinu tik toka</h3>'; //overritina
        echo '<p>'. $this -> posakis. '</p>';
       
    }
}