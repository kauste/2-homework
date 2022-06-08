<?php
class Radio1 extends Radio2 implements Planas{ // extendini klases, implementini interface'a
    public function goForIt(array $data) : array{
        echo self::TU;
        return [];
    }
    public function jaja(int $jap) : void{
    }
    
}