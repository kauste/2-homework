<?php
class Pinigine {
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;

    public function ideti (int $kiekis){
        if($kiekis > 2){
            $this -> popieriniaiPinigai += $kiekis;
        }
        else {
            $this -> metaliniaiPinigai += $kiekis;
        }
    }

    public function skaiciuoti (){
        return 'viso Pinigineje: ' . ($this -> popieriniaiPinigai) + ($this -> metaliniaiPinigai) . 'eur <br>';
    }

    public function monetos(){
        
        return  'Monetu pinigineje: ' . $this -> metaliniaiPinigai. 'eur <br>';
    }
    public function banknotai(){
       
        return  'Banknotu pinigineje' . $this -> popieriniaiPinigai. 'eur <br>';
    } 
}

//Sukurti klasę Piniginė. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai, jeigu kitaip- prie popieriniaiPinigai. Parašykite metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir metaliniaiPinigai sumą. Sukurti klasės objektą ir pademonstruoti veikimą. Nesvarbu kokios popierinės kupiūros ir metalinės monetos egzistuoja realiame pasaulyje.