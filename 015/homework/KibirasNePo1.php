<?php
require __DIR__ . '/Kibiras3.php';
class KibirasNePo1 extends Kibiras3{
    public function prideti1Akmeni(){
        $this -> akmenuKiekis += rand(2,10);
    }
}