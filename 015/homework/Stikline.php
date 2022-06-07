<?php

class Stikline {
    private $turis;
    private $kiekis = 0;
    
    public function stikline (int $turis){
        $this -> turis = $turis;
    }
    public function ipilti (int $kiekis){
        if ($this -> turis > $this -> kiekis){
            $this -> kiekis += $kiekis;
        } else {
            $this -> kiekis = $this -> turis;
        }    
    }
    public function ispilti () {
        if($this -> turis > $this -> kiekis){
            return $this -> kiekis; 
        } else {
            return $this -> turis;
        }
    }

}

//Sukurti klasę Stikline. Sukurti privačią savybę turis ir kiekis. Parašyti metodą ipilti($kiekis), kuris keistų savybę kiekis. Jeigu stiklinės tūris yra mažesnis nei pilamas kiekis- kiekis netelpa ir būna lygus tūriui. Parašyti metodą ispilti(), kuris grąžiną kiekį. Pilant išpilamas visas kiekis, tas kas netelpa, nuteka per stalo viršų. Sukurti tris stiklinės objektus su tūriais: 200, 150, 100. Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę, o mažesnę į dar mažesnę.
