<?php class Kibiras1 {
    protected $akmenuKiekis = 0;

    public function prideti1Akmeni(){
        $this -> akmenuKiekis += 1;
    }
    public function pridetiDaugAkmenu(int $kiekis){
        $this -> akmenuKiekis += $kiekis;
    }
    public function kiekPririnktaAkmenu(){
        return $this -> akmenuKiekis;
    }
}
//Sukurti klasę Kibiras1. Sukurti protected savybę akmenuKiekis. Parašyti šiai savybei metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą.